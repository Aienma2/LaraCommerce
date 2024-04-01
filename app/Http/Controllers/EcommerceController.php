<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\CategoryProduction;
use App\Models\ColorsVariant;
use App\Models\Gender;
use App\Models\ProductType;
use App\Models\Size;
use App\Models\StatusProduct;
use App\Models\Visibility;
use App\Models\TAXApplicable;

class EcommerceController extends Controller
{
    /** page create product */
    public function productCreate()
    {
        $CategoryProduction = CategoryProduction::all();
        $Gender             = Gender::all();
        $ProductType        = ProductType::all();
        $Size               = Size::all();
        $StatusProduct      = StatusProduct::all();
        $Visibility         = Visibility::all();
        $TAXApplicable      = TAXApplicable::all();
        return view('ecommerce.product-create',compact('CategoryProduction','Gender','ProductType','Size','StatusProduct','Visibility','TAXApplicable'));
    }

    /** page product overview */
    public function productOverview()
    {
        return view('ecommerce.product-overview');
    }

    /** product grid */
    public function productGrid()
    {
        return view('ecommerce.product-grid');
    }
}
