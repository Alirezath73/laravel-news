<?php

namespace App\Http\Controllers\back;

use App\Admin;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAdmin;
use App\Http\Requests\UpdateAdmin;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admins = \App\Admin::all();

        return view('back.admin.index', compact('admins'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAdmin $request)
    {
        $validatedData = $request->validated();

        $admin = new \App\Admin();
        $admin->first_name = $validatedData['first_name'];
        $admin->last_name = $validatedData['last_name'];
        $admin->mobile = $validatedData['mobile'];
        $admin->email = $validatedData['email'];
        $admin->password = Hash::make($validatedData['password']);
        $admin->save();

        $request->session()->flash('status', 'The information was successfully recorded');

        return redirect()->back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        return view('back.admin.update', compact('admin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAdmin $request, Admin $admin)
    {
        $validatedData = $request->validated();

        $admin->password = Hash::make($validatedData['password']);
        $admin->save();

        $request->session()->flash('status', 'The information was successfully recorded');

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        $admin->delete();

        return redirect()->back();
    }
}
