<?php

namespace Yajra\DataTables\Fractal\Tests;


use Illuminate\Foundation\Testing\DatabaseTransactions;
use Yajra\DataTables\Fractal\Tests\Models\User;
use Yajra\DataTables\Fractal\Tests\Transformers\UserTransformer;

class FractalTest extends TestCase
{
    use DatabaseTransactions;

    /** @test */
    public function it_can_transform_response()
    {
        $json = $this->getAjax('/users');

        $json->assertJson([
            'draw' => 0,
            'recordsTotal' => 20,
            'recordsFiltered' => 20,
        ]);

        $this->assertIsInt($json['data'][0]['id']);
        $this->assertIsString($json['data'][0]['name']);
    }

    protected function setUp(): void
    {
        parent::setUp();

        $this->app['router']->get('/users', function () {
            return datatables()->eloquent(User::query())
                               ->setTransformer(UserTransformer::class)
                               ->toJson();
        });
    }
}