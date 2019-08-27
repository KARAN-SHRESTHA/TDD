<?php

namespace Tests\Feature;

use App\Book;
use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function a_book_can_be_registered()
    {
        $this->withoutExceptionHandling();

        $response = $this->post('/books', [
            'title' => 'FUTURE WAR',
            'author' => 'KARAN STHA'
            ]);

        $response->assertOk();

        $this->assertCount(1, Book::all());

        /////   ./vendor/bin/phpunit --filter a_book_can_be_registered    ///////////
    }

    /** @test */
    public function a_user_can_be_registered()
    {
        $this->withoutExceptionHandling();

        $response = $this->post('/users', [
            'name' => 'KARAN',
            'email' => 'KARAN@gmail.com',
            'password' => 'asd12345'
            ]);

        $response->assertOk();

        $this->assertCount(1, User::all());

        /////   ./vendor/bin/phpunit --filter a_user_can_be_registered    ///////////
    }

}
