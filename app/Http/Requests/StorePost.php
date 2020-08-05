<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePost extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|string|max:255',
            'author_id' => 'required|integer',
            'status' => 'required|boolean',
            'categories' => 'required',
            'images' => 'required',
//            'images' => 'required|image|mimes:jpg,jpeg,png,gif',
            'short_description' => 'required|string',
            'long_description' => 'required|string',
        ];
    }
}
