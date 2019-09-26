<?php

namespace Tests\Feature\Unit;

use Tests\TestCase;

class UsersControllerTest extends TestCase
{

    public function testIndex()
    {
        $messagesRepo = Mockery::mock('App\Repositories\Users')
        $controller = new UsersController($messagesRepo
        );

        $controller->index();

        $messagesRepo->shouldReceive('getPaginated')->once();

    }
}
