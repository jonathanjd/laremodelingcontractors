<?php

namespace App\Http\Controllers\Article;

use App\Article;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $articles = Article::orderBy('id', 'desc')->paginate(5);
        return view('admin.article.index')->with('articles', $articles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = Category::all();
        return view('admin.article.create')->with('categories', $categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        if ($request->file('file')) {
            # code...
            $file = $request->file('file');
            $name = time() . ' ' . $file->getClientOriginalExtension();
            $path = public_path() . '/img/articles/';
            $file->move($path, $name);
        } else {
            $path = public_path() . '/img/articles/';
            $name = 'image-default.jpg';
        }

        $article = new Article();
        $article->title = $request->title;
        $article->permalink = $request->permalink != null ? $request->permalink : str_slug($request->title);
        $article->body = $request->body;
        $article->seo_title = $request->seo_title;
        $article->seo_description = $request->seo_description;
        $article->img_url = $path;
        $article->img_name = $name;
        $article->keywords = $request->keywords;
        $article->status = 'preview';
        $article->user_id = auth()->user()->id;
        $article->save();
        $article->categories()->sync($request->category);

        return redirect()->route('article.index')->with('flash', 'Category Saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $article = Article::find($id);
        return view('admin.article.show')->with('article', $article);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
