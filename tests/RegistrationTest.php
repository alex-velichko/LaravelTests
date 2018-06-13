<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class RegistrationTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testNewUserRegistration()
    {
        $rand = "FirstName" . $randomRow = rand(10000, 999999);
        $this->visit('/')
            ->click('Register')
            ->seePageIs('/register')
            ->type($rand, 'name')
            ->type($rand.'test@test.com', 'email')
            ->type('password', 'password')
            ->type('password', 'password_confirmation')
            ->press('Register')
            ->seePageIs('/home')
            ->see('Dashboard')
            ->see('You are logged in!');
    }
}
