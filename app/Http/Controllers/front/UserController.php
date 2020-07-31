<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    /**
     * Show the form for editing the specified resource.
     *
     * @param User $user
     * @return void
     */
    public function edit(User $user)
    {
        return view('front.profile', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param User $user
     * @return void
     */
    public function update(Request $request, User $user)
    {
        $validatedData = $request->validate([
            'password' => 'required|string|min:8|confirmed',
            'g-recaptcha-response' => 'required|captcha'
        ]);

        $user->password = Hash::make($validatedData['password']);
        $user->save();
        $request->session()->flash('status', 'اطلاعات با موفقیت ثبت شد.');

        return redirect()->back();
    }

}
