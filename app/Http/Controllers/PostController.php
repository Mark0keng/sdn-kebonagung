<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Pagination\Paginator;
use App\models\Post;
use App\models\Category;

class PostController extends Controller
{
    public function index()
    {
        return view('dashboard.post.index', [
            'posts' => Post::latest()->paginate(10)
        ]);
    }

    public function create()
    {
        return view('dashboard.post.create', [
            'categories' => Category::all()
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => ['required', 'max:255'],
            'category_id' => ['required'],
            'image_post' => ['image', 'file', 'max:1024'],
            'body' => ['required']
        ]);
        
        if($request->file('image_post'))
        {
            $validated['image_post'] = $request->file('image_post')->store('post-images');
        }

        $validated['slug'] = Str::slug($request->title, '-');
        $validated['user_id'] = auth()->user()->id;
        $validated['excerpt'] = Str::limit(strip_tags($request->body), 200);

        Post::create($validated);
        
        $request->session()->flash('success', 'Post Created Successfully!');

        return redirect('/dashboard/post');
    }

    public function edit(Post $post)
    {
        return view('dashboard.post.edit', [
            'post' => $post,
            'categories' => Category::all()
        ]);
    }

    public function update(Request $request, Post $post)
    {
        $validated = $request->validate([
            'title' => ['required', 'max:255'],
            'category_id' => ['required'],
            'image_post' => ['image', 'file', 'max:1024'],
            'body' => ['required']
        ]);

        if($request->file('image_post'))
        {
            if($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validated['image_post'] = $request->file('image_post')->store('post-images');
        }

        $validated['slug'] = Str::slug($request->title, '-');
        $validated['user_id'] = auth()->user()->id;
        $validated['excerpt'] = Str::limit(strip_tags($request->body), 200);

        Post::where('id', $post->id)
            ->update($validated);
        
        return redirect('/dashboard/post')->with('success', 'Post has been updated!');
    }

    public function destroy(Post $post)
    {
        if($post->image_post) {
            Storage::delete($post->image_post);
        }

        Post::destroy($post->id);

        return redirect('/dashboard/post')->with('success', 'Post has been deleted!');
    }
}
