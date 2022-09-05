<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function AddPostForm()
    {
        $categories = Category::orderBy('id', 'desc')->get();
        return view('backend.post.create', compact('categories'));
    }

    public function postStore(Request $request)
    {


        $this->validate($request, [
            'category_id' => 'required|integer',
            'title'       => 'required|string',
            'description' => 'required|string',
            'image'       => 'required',

        ]);


        if($request->file('image')){
            $imageName = time(). '.' .$request->image->extension();
            $request->image->move('post/img/', $imageName);
        }

        $post = new Post();
        $post->category_id = $request->category_id;
        $post->user_id     = session()->get('adminId');
        $post->title       = $request->title;
        $post->slug        = str_replace('-', ' ', strtolower($request->title));
        $post->description = $request->description;
        $post->image       = $imageName;
        $post->save();
        return redirect()->back()->with('success', 'Post Added Successfully');

    }

    public function managePost()
    {
        $posts = Post::with('category')->orderBy('id', 'desc')->get();
        return view('backend.post.list', compact('posts'));
    }

    public function editPostForm($id)
    {
        $categories = Category::orderBy('id', 'desc')->get();
        $posts = Post::find($id);
        return view('backend.post.edit', compact('posts', 'categories'));
    }

    public function deletePost($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect()->back()->with('success', 'Post deleted successfully');
    }

    public function updatePost(Request $request, $id)
    {
        $this->validate($request, [
            'category_id' => 'required|integer',
            'title'       => 'required|string',
            'description' => 'required|string',
            'image'       => 'required',

        ]);

        $post = Post::find($id);
        
        if($request->file('image')){
            if($post->image && file_exists('post/img/'.$post->image)){
                unlink('post/img/'.$post->image);
            }
            $imageName = time(). '.' .$request->image->extension();
            $request->image->move('post/img/', $imageName);
            $post->image       = $imageName;
        }
        
        $post->category_id = $request->category_id;
        $post->user_id = session()->get('adminId');
        $post->title       = $request->title;
        $post->slug       = str_replace('-', ' ', strtolower($request->title));
        $post->description = $request->description;
        $post->save();
        return redirect()->back()->with('success', 'Post Updated Successfully');
    }
}
