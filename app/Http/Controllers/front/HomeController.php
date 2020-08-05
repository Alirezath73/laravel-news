<?php

namespace App\Http\Controllers\front;

use App\CatagoryPost;
use App\Category;
use App\CategoryPost;
use App\Comment;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreComment;
use App\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('id', 'desc')->paginate(3);
        return view('front.index', compact('posts'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function storeComment(StoreComment $request)
    {
        $validateData = $request->validated();

        Comment::create([
            'user_id' => $request->input('user_id'),
            'post_id' => $request->input('post_id'),
            'description' => $validateData['description'],
        ]);

        return redirect()->back();

    }

    public function categoryPosts(Category $category)
    {
        $posts = $category->posts()->paginate(3);
//        dd($posts);
        return view('front.categoryPosts', compact('posts', 'category'));
    }

    /**
     * Display the specified resource.
     *
     * @param Post $post
     * @return void
     */
    public function showPost(Post $post)
    {
        $categoriesId = $post->categories()->pluck('id')->toArray();

        $postsId = CategoryPost::whereIn('category_id', $categoriesId)->where('post_id', '!=', $post->id)->pluck('post_id')->toArray();

        $posts = Post::whereIn('id', $postsId)->orderBy('created_at', 'desc')->limit(4)->get();

        return view('front.single', compact('post', 'posts'));
    }

    public function search(Request $request)
    {
        $input = $request->input('q');

        $posts = Post::where('title', 'like', '%' . $input . '%')->paginate(3);

        return view('front.search', compact('posts', 'input'));
    }
}
