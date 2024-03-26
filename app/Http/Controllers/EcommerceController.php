<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EcommerceController extends Controller
{
    /** page create product */
    public function productCreate()
    {
        return view('ecommerce.product-create');
    }
}
