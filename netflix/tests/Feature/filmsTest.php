<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class filmsTest extends TestCase
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
    public function test_films_index()
    {
        $response = $this->get('/films');

        $response->assertStatus(200);
    }
    public function test_films_show()
    {
        $response = $this->get('/films/4');

        $response->assertStatus(200);
    }
    public function test_films_create()
    {
        $response = $this->get('/films/create');

        $response->assertStatus(200);
    }
    public function test_films_edit()
    {
        $response = $this->get('/films/4/edit');

        $response->assertStatus(200);
    }
}
