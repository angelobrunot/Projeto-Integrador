<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class MenuTest extends TestCase
{

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}

use RefreshDatabase;

    protected function setUp():void
    {
      parent::setUp();
      $this->post('/register',[
        'name' => 'Angelobx',
        'email' => 'angelobx@gmail.net.br',
        'password' => 'topsecret',
        'password_confirmation' => 'topsecret',
        'company_name' => 'Empresa LTDA',
        'trading_name' => 'Nome Fantasia',
        'address' => 'Rua X',
        'phone' => '(42)75880534',
        'cnpj' => '9874326599023',
        'cpf' => '13456755598'
      ]);

      $user = User::where('email', 'angelobx@gmail.net.br')->first();
      $this->actingAs($user);
    }

    public function test_should_show_index_menu_when_authenticated()
    {
      $response = $this->get('/menu');

      $response->assertOk()
        ->assertViewIs('menus.index')
        ->assertSeeText('Cardápios');
    }

    public function test_shouldnt_create_menu_when_invalid_data()
    {
      $response = $this->post('/menu'[
        'name' => 'Cardápios de Teste',
        'description' => 'Descrição',
      ]);

      


      $response->assertRedirect()
      ->assertInvalid(['name']);
    }
