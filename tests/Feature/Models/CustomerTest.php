<?php

use App\Models\User;
use App\Models\Customer;
use function Pest\Faker\fake;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('can_create_customer', function () {
    // Arrange
    $address1 = fake()->streetAddress;

    // Act
    $customer = Customer::factory()->create(['address_1' => $address1]);

    // Assert
    expect($customer->address_1)->toBe($address1);
});

test('has_user_relationship', function () {
    // Arrange
    $address1 = fake()->streetAddress;

    // Act
    $customer = Customer::factory()->create(['address_1' => $address1]);

    // Assert
    expect($customer->user)->toBeInstanceOf(User::class);
});