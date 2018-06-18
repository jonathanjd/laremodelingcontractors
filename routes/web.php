<?php

use App\Article;
use App\Category;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/', function () {
    $categories = Category::all();
    return view('welcome')->with('categories', $categories);
});

Route::get('about', function () {
    return view('about');
})->name('about');

Route::get('estimates', function () {
    return view('estimates');
})->name('estimates');

Route::get('how-to', function () {
    return view('howto');
})->name('howto');

Route::get('contractors-registration', function () {
    return view('contractorsRegistration');
})->name('contractorsRegistration');


Route::group(['prefix' => 'admin'], function () {
    Route::get('/dashboard', 'AdminController@dashboard')->name('dashboard');
    Route::resource('category', 'Category\CategoryController', ['only' => ['index', 'create', 'edit', 'store', 'update']]);
    Route::get('article/delete/{id}', 'Article\ArticleController@delete')->name('article.delete');
    Route::resource('article', 'Article\ArticleController', ['only' => ['index', 'create', 'edit', 'show', 'store', 'update', 'destroy']]);
});

//Auth::routes();
Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/login', 'Auth\LoginController@login');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/{permalink}/{article}', function ($permalink, $article) {

    $article = Article::where('permalink', $article)->first();

    $articleRecommended = Article::orderByRaw('RAND()')->with('categories')->whereHas('categories', function ($query) use ($permalink) {
        $query->where('name', $permalink);
    })->where('title', '!=', $article)->take(3)->get();


    if (strtolower($article->categories[0]->name) == $permalink) {
        # code...
        return view('articleShow')->with('article', $article)->with('articleRecommended', $articleRecommended);
    } else {
        # code..
        return redirect()->route('404');
    }

})->name('showArticle');

Route::get('404', function () {
    return view('404');
})->name('404');

Route::get('/{permalink}', function ($permalink) {
    $categoryArticles = Article::with('categories')->whereHas('categories', function ($query) use ($permalink) {
        $query->where('name', $permalink);
    })->orderBy('id', 'desc')->paginate(5);

    return view('category')->with('categoryArticles', $categoryArticles);
})->name('myCategory');



