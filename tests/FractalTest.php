<?php

namespace Yajra\DataTables\Fractal\Tests;


use Illuminate\Foundation\Testing\DatabaseTransactions;
use Yajra\DataTables\Fractal\Tests\Models\User;

class FractalTest extends TestCase
{
    use DatabaseTransactions;

    /** @test */
    public function it_can_transform_response()
    {
        $response = $this->getAjax('/users');

        $response->assertJson([
            'draw' => 0,
            'recordsTotal' => 20,
            'recordsFiltered' => 20,
        ]);
    }

    protected function setUp(): void
    {
        parent::setUp();

        $this->app['router']->get('/users', function () {
            return datatables()->eloquent(User::query())->toJson();
        });
    }
}