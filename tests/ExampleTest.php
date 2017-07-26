<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    use DatabaseTransactions;
    
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $name = 'Daniel Martinez';
        $user = factory(\App\User::class)->create([
            'name' => $name
            ]); // Creación de un usuario

        $this->actingAs($user, 'api') // Autenticación con el driver api
             ->visit('api/user')
             ->see($name);
    }
}
