<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    //Creating index

    public function index($slug){
        $categoryClass = new Category;
        $category = $categoryClass->findCategoryBySlug($slug);

        // return $category;

        if($category) {return view('category', compact('category'));}
        else {
            $product = $categoryClass->findProductBySlug($slug);
            return $product ? $product:abort(404);
        }
        return abort(404);
    }




    //End Category Controller
}
