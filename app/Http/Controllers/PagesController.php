<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Post;
use DB;
use App\User;

class PagesController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('updated_at', 'desc')->paginate(5);
        // // return view('pages.index')->with('posts', $posts);
        // return View('pages.index')->with('posts', $posts);
        // $title = 'Welcome to Laravel!';
        return View('pages.index')->with('posts', $posts);
        // return View('pages.index', compact('title'));
    }

    public function about()
    {
        return View('pages.about');
    }
    public function services()
    {
        $data = array(
            'title' => 'Services',
            'Services' => ['Web Design', 'SEO', 'Programming']
        );
        return View('pages.services')->with($data);
    }
}
