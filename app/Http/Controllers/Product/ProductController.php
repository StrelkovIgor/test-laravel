<?php

namespace App\Http\Controllers\Product;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller{

    public function edit(Request $request){
        $view = [];

        $view['title'] = "Добавить товар";


        if($request->isMethod('post')){

        }

        return view('product_edit',$view);
    }
}