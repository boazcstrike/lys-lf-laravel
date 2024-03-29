<?php

namespace App\Http\Controllers;

use App\Article;
 
class ArticleAPIController extends Controller
{
    public function index()
    {
        return Article::all();
    }
 
    public function show($id)
    {
        return Article::with(['user', 'category', 'tags'])->find($id);
    }

    public function store(Request $request)
    {
        return Article::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $article = Article::findOrFail($id);
        $article->update($request->all());

        return $article;
    }

    public function delete(Request $request, $id)
    {
        $article = Article::findOrFail($id);
        $article->delete();

        return 204;
    }
}