<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RegisterTest extends TestCase
{

use RefreshDatabase;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_register_form()
    {
        $response = $this->get('/register');

        $response->assertStatus(200);
    }

    public function test_shouldnt_register_user_when_invalid_data()
    {
        $response = $this->post('/register');

        $response->assertRedirect()
          ->assertInvalid(['name', 'email', 'password']);
    }

    // Classe RegisterTest .......

    public function test_should_register_user_when_valid_data()
    {
        $response = $this->post('/register',[
          'name' => 'Angelo',
          'email' => 'angelobt@gmail.net.br',
          'password' => 'topsecret',
          'password_confirmation' => 'topsecret',
          'company_name' => 'Empresa LTDA',
          'trading_name' => 'Nome Fantasia',
          'address' => 'Rua A',
          'phone' => '(42)99893349',
          'cnpj' => '3331239450645',
          'cpf' => '10433399043'
        ]);

       $response->assertRedirect()->assertSessionHasNoErrors();

       $this->assertDatabaseHas('users', ['email' => 'angelobt@gmail.net.br']);

       $this->assertDatabaseHas('establishments', ['cnpj' => '3331239450645']);
    }

}
