<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;
use App\Models\Staff;
use App\Models\Post;

class HomeController extends Controller
{
    public function index()
    {
        return view('landing-page.home', [
            'posts' => Post::latest()->paginate(3)
        ]);
    }

    public function news()
    {
        return view('landing-page.news', [
            'posts' => Post::latest()->paginate(9)
        ]);
    }
    
    public function showNews(Post $post)
    {
        return view('landing-page.show-news', [
            'post' => $post
        ]);
    }

    public function staff()
    {
        return view('landing-page.staff', [
            'leader' => Staff::where('title', 'Kepala Sekolah')->first(),
            'staffs' => Staff::whereNotIn('title', ['Kepala Sekolah'])->get()
        ]);
    }

    public function vision()
    {
        return view('landing-page.vision');
    }
}
