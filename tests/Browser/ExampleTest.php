<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ExampleTest extends DuskTestCase
{
   use DatabaseTransactions;

    /**
     * A basic browser test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('Laravel');

        });
    }

    public function testRegistration()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('https://google.com')->screenshot('google');

           $browser->visit('/register')
               ->type('#name', 'John Doe')
               ->type('#email', 'john@doe.com')
               ->type('#password', 'Password123!')
               ->type('#password_confirmation', 'Password123!')
               ->press('button[type="Submit"]')
               ->pause(500)
               ->assertPathIs('/dashboard')
               ->logout();


            $browser->visit('/login')
                ->type('#email', 'john@doe.com')
                ->type('#password', 'Password123!')
                ->press('button[type="Submit"]')
                ->pause(500)
                ->assertPathIs('/dashboard');
        });
    }
}
