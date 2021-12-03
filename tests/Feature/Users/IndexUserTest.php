<?php

namespace Tests\Feature\Users;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class IndexUserTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/api/users');
        $response->assertSeeText('index from UserController');
        $response->assertStatus(200);
    }
}
