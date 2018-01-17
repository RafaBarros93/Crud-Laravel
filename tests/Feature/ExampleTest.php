<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    use DatabaseMigrations;

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testHomeResponseStatus()
    {
        
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function testAuthentiation()
    {
        //$user = factory(\App\User::class)->create();
        
        $response = $this->get('/home');

        $response->assertStatus(302);
    }

    public function testDatabaseUsers()
    {
        
        factory(\App\User::class)->create(['email'=>'teste@teste.com.br']);
        $this->assertDatabaseHas('users', ['email'=>'teste@teste.com.br']);

    }

}
