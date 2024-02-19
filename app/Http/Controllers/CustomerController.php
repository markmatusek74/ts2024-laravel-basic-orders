<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Http\Requests\StoreCustomerRequest;
use App\Http\Requests\UpdateCustomerRequest;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Create some data on the fly for the index page
        // Customer::factory()->count(5)->create();

        $customers  = Customer::with('user')->get();
        return view('customers.index', ['customers' => $customers]);
    }
}