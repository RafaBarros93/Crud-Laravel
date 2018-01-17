<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class AccountsTest extends TestCase
{
	use DatabaseMigrations;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testApiList()
    {
    	
        $data = factory(\App\Account::class, 20)->create();//create() cadastra o dado criado no banco
        $response = $this->get('/api/accounts');
        $response->assertJson(['data'=>$data->toArray()]);
    }

    public function testApiView()
    {
    	
    	$data = factory(\App\Account::class)->create();

    	$response = $this->json('GET', '/api/accounts/'.$data->id);

    	$response->assertStatus(200)->assertJson($data->toarray());
    }

    public function testApiInsert()
    {
        $data = factory(\App\Account::class)->make();//make retorna os models sem cadastrar no banco

        $response = $this->json('POST', 'api/accounts', $data->toArray());
        $response->assertStatus(200)->assertJson($data->toArray());
    }

    public function testApiUpdate()
    {
        $data = factory(\App\Account::class)->create();

        $toUpdate = ['title'=>'Conta do Erik'];

        $response = $this->json('PUT', '/api/accounts/'.$data->id, $toUpdate);

        $response->assertStatus(200)->assertJson($toUpdate);
    }

    public function testApiDelete()
    {
        $data = factory(\App\Account::class)->create();

        $response = $this->json('DELETE', '/api/accounts/'.$data->id);

        $response->assertStatus(200)->assertJson($data->toArray());
    }

    

















}
