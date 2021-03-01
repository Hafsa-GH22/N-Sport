<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Article;
use Illuminate\Support\Facades\DB;
use View;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    // public function all_categories()
    // {
    //     // $categories = DB::table('category')->get();
    //     $categories = DB::select('select * from categories');
    //     // return response()->json(compact('categories'), 201);
    //     // return View::share('categories', $categories);
    //     return View::make('front')->with('categories', $categories);
    //     // return view('front', compact('categories'));
    // }

    public function categoryPage($name)
    {
        $category = Category::where('name',$name)->first();

        //$articles = $category->articles();
        
        $articles =DB::table('articles')->where('category_id', $category->id)->get();

        return view('categoryArticles',[
            'category' => $category ,
            'articles' => $articles
        ]);
    }
}
