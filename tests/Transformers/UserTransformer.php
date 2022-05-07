<?php

namespace Yajra\DataTables\Fractal\Tests\Transformers;

use League\Fractal\TransformerAbstract;
use Yajra\DataTables\Fractal\Tests\Models\User;

class UserTransformer extends TransformerAbstract
{
    /**
     * @param  \Yajra\DataTables\Fractal\Tests\Models\User  $user
     * @return array
     */
    public function transform(User $user): array
    {
        return [
            'id' => (int) $user->id,
            'name' => $user->name,
        ];
    }
}
