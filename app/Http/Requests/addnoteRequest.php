<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class addnoteRequest extends FormRequest
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
            'author' => 'required|min:3|max:12',
            'name' => 'required|min:3|max:40',
            'text' => 'required|max:255'
        ];
    }
    public function attributes(){
        return [
            'author' => 'your name',
            'name' => 'note name',
            'text' => 'note text'
        ];
    }
}
