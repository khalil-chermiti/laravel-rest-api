<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        return Article::all();
    }

    public function show(Article $article)
    {
        return $article;
    }

    public function store(Request $request)
    {
        $article = Article::create($request->all());

        return response()->json([
            'message' => 'Article created successfully',
            'article' => $article
        ], 201);
    }

    public function update(Request $request, Article $article)
    {
        $article->update($request->all());

        return response()->json([
            'message' => 'Article updated successfully',
            'article' => $article
        ], 200);
    }

    public function delete(Article $article)
    {
        $article->delete();

        return response()->json([
            'message' => 'Article deleted successfully'
        ], 200);
    }
}