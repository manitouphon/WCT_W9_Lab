<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
  
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('pages.index');
    }
    public function about()
    {
        return view('pages.about');
    }
    public function blogsingle()
    {
        return view('pages.blog-single');
    }
    public function blog()
    {
        return view('pages.blog');
    }
    public function contact()
    {
        return view('pages.contact');
    }
    public function portfoliod()
    {
        return view('pages.portfolio-details');
    }
    public function portfolio()
    {
        return view('pages.portfolio');
    }
    public function pricing()
    {
        return view('pages.pricing');
    }
    public function services()
    {
        return view('pages.services');
    }
    public function team()
    {
        return view('pages.team');
    }
    public function testimonials()
    {
        return view('pages.testimonials');
    }
}
