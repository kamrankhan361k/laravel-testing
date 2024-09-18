<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProductCreationTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function it_creates_a_product_via_http_request()
    {
        $response = $this->post('/products', [
            'name' => 'Smartphone',
            'description' => 'A modern smartphone',
            'price' => 700.00
        ]);

        $response->assertStatus(201);
        $this->assertDatabaseHas('products', ['name' => 'Smartphone']);
    }
}
