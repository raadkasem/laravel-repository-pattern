<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $customer = Customer::orderBy('name','asc')
        ->where('active', '1')
            ->with('user')->get();

        return $customer;
    }
}
