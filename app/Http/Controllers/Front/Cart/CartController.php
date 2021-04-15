<?php

namespace App\Http\Controllers\Front\Cart;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\CartModel;
use App\Model\ReviewModel;
use App\Model\ProductModel;
use App\Model\ProductImageModel;
use App\Model\ProductAdditionalData;
use Auth;

class CartController extends Controller
{
    public function showPage(Request $request)
    {
        return view('frontend.pages.cart');
    }


    public function showCartDetails(Request $request)
    {

    }
}
