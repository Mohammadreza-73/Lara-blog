<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class EditPostRequest extends FormRequest
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
            'title'   => 'required|string|max:255',
            'slug'    => 'required|string|max:255',
            'image'   => 'required|mimes:png,jpeg,jpg|max:1024',
            'excerpt' => 'required|string|max:1000',
            'body'    => 'required|string',
        ];
    }
}
