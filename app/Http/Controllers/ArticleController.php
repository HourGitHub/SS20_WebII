<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $results = Article::all();
        $results = Article::orderBy("id", "DESC")->get();
        return view("article.index", compact("results"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Article::create($request->validate([
            "title" => [
                "required",
                "min:3",
                "max:100"
            ],
            "email" => "required|email|regex:/^[a-zA-Z0-9]+@[a-zA-Z0-9]+\.[a-zA-Z]+$/",
            "description" => "required|min:10|max:1000"
        ])
        );
        return redirect("/article");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('article.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $article = Article::find($id);
        return view("article.show", compact("article"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $article = Article::find($id);
        return view("article.edit", compact('article'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Article::find($id)->update($request->all());
        return redirect("/article");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Article::find($id)->delete();
        return to_route("article.index");
        // return redirect()->route("article.index");
        // return redirect("/article");
    }

}
