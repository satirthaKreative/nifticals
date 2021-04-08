<?php

namespace App\Http\Controllers\Front\ProductPage;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\ProductModel;
use App\Model\ProductImageModel;
use App\Model\ReviewModel;

class ProductDetailsController extends Controller
{
    //

    public function index(Request $request, $val2)
    {
        $p_id = base64_decode($val2);
        $productSingleQuery = ProductModel::where('id',$p_id)->get();
        $productSingleImgsQuery = ProductImageModel::where('product_id',$p_id)->get();
        $reviewQuery = ReviewModel::where('product_id',$p_id)->get();

        return view('frontend.pages.product-details',compact('productSingleQuery','productSingleImgsQuery','reviewQuery'));
    }
}
