<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $customers = Customer::with('latestOrder')->get();
        // latast order
        // $customers = Customer::with('latestOrder')->find(2);
        // return $customers;

        // oldest order
        // $customers = Customer::with('oldestOrder')->find(2);
        // return $customers;

        // small order
        // $customers = Customer::with('smallestOrder')->find(2);
        // return $customers;

        // largest order
        // $customers = Customer::with('largestorder')->find(2);
        // return $customers;

        // all customer largest order
        // $customers = Customer::with('largestorder')->get();
        // return $customers;

        // show customer all orders
        // $customers = Customer::with('orders')->get();
        // return $customers;


         // show customer all orders with largestorder
         $customers = Customer::with('orders')
         ->with('largestOrder')->get();
         return $customers;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
