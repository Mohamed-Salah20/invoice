<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

use App\User;

class LoginTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */


        public function testExample()
    {

        // $user = User::create([
        //     'name' => 'test',
        //     'email' => 'test8@gmail.com',
        //     'password' => bcrypt('123456'),
        //     'roles_name' => ["Super User"],
        //     'Status' => 'مفعل',
        //     ]);

        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->type('@email', 'test@gmail.com')
                    ->type('@password', '123456')
                    ->press('@login-button')
                    ->assertPathIs('/home');
        });
    }
}
