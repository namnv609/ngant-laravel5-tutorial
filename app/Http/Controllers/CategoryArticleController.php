<?php

namespace App\Http\Controllers;

use App\models\Article;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\models\Category;

class CategoryArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($categoryId)
    {
        $category = Category::find($categoryId);
        $articles = Article::where('category_id', $categoryId)->get();
        return view('articles.index', ['category' => $category, 'articles' => $articles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($categoryId)
    {
        return view('articles.create', ['categoryId' => $categoryId]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $categoryId)
    {
        $category = Category::find($categoryId);
        $category->articles()->create($request->all());
        return redirect('categories');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($categoryId, $articleId)
    {
        $article = Article::find($articleId);
        $category = Category::find($categoryId);
        return view('articles.show', ['category' => $category, 'article' => $article]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($categoryId, $articleId)
    {
        $article = Article::find($articleId);
        $category = Category::find($categoryId);
        return view('articles.edit', ['category' => $category, 'article' => $article]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $categoryId, $articleId)
    {
        $article = Article::find($articleId);
        $article->update($request->all());
        return redirect('categories');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($categoryId, $articleId)
    {
        $article = Article::find($articleId);

        $article->delete();
        return redirect('categories');
    }
}
