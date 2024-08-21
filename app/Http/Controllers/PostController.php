<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class PostController extends Controller
{
    //
    public function index() {

        // DBのproductsテーブルから取ってきたデータを$productsに代入する
        $products = DB::table('products') -> get();

        // posts.indexに$productsを渡す
        return view('posts.index' , compact('products'));
    }
    
    public function show($id){

        // idに一致するデータをproductsテーブルからとってきて$productに代入する
        $product = Product::find($id);

        // posts.showに$productを渡す
        return view('posts.show' , compact('product'));
    }
}
