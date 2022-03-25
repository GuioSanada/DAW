<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class seriesTest extends TestCase
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
    public function test_series_index()
    {
        $response = $this->get('/series');

        $response->assertStatus(200);
    }
    public function test_series_show()
    {
        $response = $this->get('/series/8');

        $response->assertStatus(200);
    }
    public function test_series_create()
    {
        $response = $this->get('/series/create');

        $response->assertStatus(200);
    }
    public function test_series_edit()
    {
        $response = $this->get('/series/8/edit');

        $response->assertStatus(200);
    }

}
