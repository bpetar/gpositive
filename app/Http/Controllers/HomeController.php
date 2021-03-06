<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App;
use App\Article;
use App\Course;
use App\Workshop;
use App\Tag;
use App\Comment;
use App\Event;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //dd($request);
        
        Log::info('Showing indexx: ' . session('lang'));

        $articles = Article::latest('updated_at')->get();
        $courses = Course::latest('updated_at')->get();
        $workshops = Workshop::latest('updated_at')->get();
        $tags = Tag::all();
        

        //if($request->cookie('lang')) App::setLocale($request->cookie('lang'));

        return view('home', compact('articles', 'courses', 'workshops', 'tags'));
    }

    public function setLanguage(Request $request, $locale = '')
    {
        # code...
        session()->put('lang', $locale);
        $_COOKIE['lang'] = $locale;
        Log::info('Showing contorller set language: ' . session('lang'));

        //dd($locale);
        return redirect()->to('/')->cookie('lang', $locale, 24*60*290);
    }


}
