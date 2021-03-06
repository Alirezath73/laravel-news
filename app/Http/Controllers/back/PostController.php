<?php

namespace App\Http\Controllers\back;

use App\Author;
use App\Category;
use App\Http\Controllers\Controller;
use App\Image;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();

        return view('back.post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $authors = \App\Author::all();

        $categories = \App\Category::all();

        return view('back.post.create', compact('authors', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'author_id' => 'required|integer',
            'status' => 'required|boolean',
            'categories' => 'required',
            'images' => 'required',
//            'images' => 'required|image|mimes:jpg,jpeg,png,gif',
            'short_description' => 'required|string',
            'long_description' => 'required|string',
        ]);

        $post = Post::create([
            'title' => $validatedData['title'],
            'author_id' => $validatedData['author_id'],
            'status' => $validatedData['status'],
            'short_description' => $validatedData['short_description'],
            'long_description' => $validatedData['long_description'],
        ]);

        foreach ($validatedData['categories'] as $categoryId) {
            $post->categories()->attach($categoryId);
        }

        if ($request->hasFile('images')) {
            $files = $request->file('images');
            foreach ($files as $file) {
                $md5 = md5(rand(1, 9999999) . time() . microtime());
                if ($file->move(public_path('uploads'), $md5 . '.' . $file->getClientOriginalExtension())) {
                    Image::create([
                        'image_url' => $md5 . '.' . $file->getClientOriginalExtension(),
                        'post_id' => $post->id,
                    ]);
                }
            }
        }

        $request->session()->flash('status', 'The information was successfully recorded');

        return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Post $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $authors = Author::all();

        $postCategoriesIds = $post->categories()->pluck('id')->toArray();

        $categories = Category::all();

        $PostImages = $post->images()->get();

        return view('back.post.update', compact('post', 'authors', 'categories', 'postCategoriesIds', 'PostImages'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'author_id' => 'required|integer',
            'status' => 'required|boolean',
            'categories' => 'required',
            'images' => 'nullable',
//            'images' => 'required|mimes:jpg,jpeg,png,gif',
            'short_description' => 'required|string',
            'long_description' => 'required|string',
        ]);

        $post = Post::findOrFail($id);

        $post->slug = null;

        $post->update([
            'title' => $validatedData['title'],
            'author_id' => $validatedData['author_id'],
            'status' => $validatedData['status'],
            'short_description' => $validatedData['short_description'],
            'long_description' => $validatedData['long_description'],
        ]);

        $post->categories()->sync($validatedData['categories']);

        if ($request->hasFile('images')) {
            $files = $request->file('images');
            foreach ($files as $file) {
                $md5 = md5(rand(1, 9999999) . time() . microtime());
                if ($file->move(public_path('uploads'), $md5 . '.' . $file->getClientOriginalExtension())) {
                    Image::create([
                        'image_url' => $md5 . '.' . $file->getClientOriginalExtension(),
                        'post_id' => $post->id,
                    ]);
                }
            }
        }

        $request->session()->flash('status', 'The information was successfully recorded');

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);

        $images = $post->images()->get();

        foreach ($images as $image) {
            if (file_exists(public_path('/uploads/') . $image->image_url)) {
                unlink(public_path('/uploads/') . $image->image_url);
            }
        }

        $post->delete();

        return redirect()->back();
    }

    public function deleteImage(Request $request)
    {
        $image = Image::find($request->input('id'));

        if (file_exists(public_path('/uploads/') . $image->image_url)) {
            unlink(public_path('/uploads/') . $image->image_url);
        }

        $image->delete();
    }
}
