<?php

namespace App\Http\Controllers\back;

use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {

        $categories = \App\Category::all();

        return view('back.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $categories = \App\Category::all();

        return view('back.category.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255|unique:categories',
            'parent_id' => 'nullable',
        ]);

        \App\Category::create([
            'name' => $validatedData['name'],
            'parent_id' => $validatedData['parent_id']
        ]);

        $request->session()->flash('status', 'The information was successfully recorded');

        return redirect()->back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        $categories = Category::all();
        $category = Category::findOrFail($id);

        return view('back.category.update', compact('category', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'parent_id' => 'nullable',
        ]);

        $category = Category::findOrFail($id);
        $category->update([
            'name' => $validatedData['name'],
            'parent_id' => $validatedData['parent_id'],
        ]);

        $request->session()->flash('status', 'The information was successfully recorded');

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        $category = \App\Category::findOrFail($id);

        \App\Category::where('parent_id', $id)->update([
            'parent_id' => null
        ]);

        $category->delete();

        return redirect()->back();
    }
}
