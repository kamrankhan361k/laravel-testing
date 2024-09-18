<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
class ProductTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_create_a_product()
    {
        // Simulate product creation without database interaction
        $product = new Product([
            'name' => 'Laptop',
            'description' => 'A powerful laptop',
            'price' => 1500.00,
        ]);

        // Assert that the product data is set correctly
        $this->assertEquals('Laptop', $product->name);
        $this->assertEquals('A powerful laptop', $product->description);
        $this->assertEquals(1500.00, $product->price);
    }
}
