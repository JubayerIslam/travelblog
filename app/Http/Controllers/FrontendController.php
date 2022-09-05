<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $categories = Category::orderBy('id', 'desc')->get();
        $posts = Post::with('category')->paginate(2);
        return view('frontend.home.index', compact('categories', 'posts'));
    }

    public function details($id, $title)
    {
        $post = Post::with('user')->find($id);
        return view('frontend.home.details', compact('post'));
    }

   public function storeComment()
   {
    $comments = new Comment();
   }
}
