<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function home(Request $request)
    {
        $sort = $request->get("sort", "id");
        $dir = $request->get("dir", "desc");

        if (!in_array($sort, array("title", "id", "views"))) {
            $sort = "id";
        }

        if ($sort == "views") {
            $all_articles = Article::all()->sort(function ($a, $b) {
                return $b->view_count - $a->view_count;
            })->toQuery()->paginate(10);
        } else {
            $all_articles = Article::orderBy($sort, $dir)->paginate(10);
        }

        $top_articles = Article::get()->sort(function ($a, $b) {
            return $b->view_count - $a->view_count;
        })->toQuery()->paginate(5);

        $photographie = Article::orderBy($sort, $dir)->paginate(9);

        return view('home', [
            'articles' => $all_articles, 
            'top_articles' => $top_articles,
            'photographie' => $photographie,
            'lastArticles' => $this->getLastArticles()
        ]);
    }

    public function getLastArticles()
    {
        return Article::orderBy('updated_at')->limit(5)->get();
    }
    
    public function articleDetail($id)
    {
        //details of article
        $article = DB::table('articles')->where('id', $id)->get();
        //suggestion
        $articles = DB::table('articles')->where('category_id', $article[0]->category_id)->where('id', '!=', $id)->get();

        return view('articleDetail', [
            'article' => $article,
            'articles' => $articles
        ]);
    }
}
