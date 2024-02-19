<?php

use App\Models\Customer;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);
test('check customer count', function () {
    // Arrange
    $customerCount = fake()->numberBetween(1, 10);
    Customer::factory()->count($customerCount)->create();

    // Act
    $response = $this->get('/customers');

    // Assert
    $response->assertStatus(200);
    expect($response['customers'])->toHaveCount($customerCount);
});