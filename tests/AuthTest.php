<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class AuthTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testNewUserRegistration()
    {
        $this->visit('/')
            ->click('Login')
            ->seePageIs('/login')
            ->type('123test@test.com', 'email')
            ->type('test123', 'password')
            ->check('remember')
            ->press('Login')
            ->seePageIs('/home')
            ->see('Dashboard')
            ->see('You are logged in!');
    }
}
