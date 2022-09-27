<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LoginTest extends TestCase
{

use RefreshDatabase;

  protected function setUp():void
  {
    parent::setUp();

    $this->post('/register', [
      'name' => 'Angelo',
      'email' => 'angelobt@gmail.com',
      'password' => 'topsecret',
      'password_confirmation' => 'topsecret',
      'company_name' => 'Empresa LTDA',
      'trading_name' => 'Nome Fantasia',
      'address' => 'Rua A',
      'phone' => '(42)99003825',
      'cnpj' => '5552436588999',
      'cpf' => '12433585990'
    ]);

    \Auth::logout();
  }

//... continuação da classe LoginTest

    /**
     * A basic feature test example.
     *
     * @return void
     */
     public function test_should_show_login_form()
     {
         $response = $this->get('/login');

         $response->assertStatus(200)
           ->assertSeeText('Login');
     }

    public function test_example()
    {
        $response = $this->get('/login');

        $response->assertStatus(200);
    }


    public function test_should_login_when_invalid_data()
    {
        $response = $this->post('/login');

        $response->assertRedirect()
          ->assertInvalid(['email', 'password']);
    }

    public function test_should_login_when_valid_data()
    {
        $response = $this->post('/login',[
          'email' => 'angelobt@gmail.com',
          'password' => 'topsecret',
          'remember' => 'on',
        ]);

        $this->assertAuthenticated();
    }

}
