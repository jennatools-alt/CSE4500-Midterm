<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ProjectController extends Controller
{
    //

    public function index(){

        $products = DB::table('products')->get();

        return view('index', ['products'=>$products]);

    }


    public function add_product(){
        return view('add_product');
    }


    public function edit_product(Request $request, $id){

        $product_array = DB::table('products')->where('id', $id)->get();

        return view('edit_product', ['product_array'=>$product_array]);
    }

    public function edit_product_image(){
        return view('edit_product_image');
    }
}
