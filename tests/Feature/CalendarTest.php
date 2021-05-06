<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CalendarTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     *
     * @test
     */
    public function index()
    {
        $response = $this->get('/calendar');

        $response->assertStatus(200);
    }
}
