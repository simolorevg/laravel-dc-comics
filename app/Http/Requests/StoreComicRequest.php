<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required|min:3|max:30',
            'description' => 'required|min:10|max:100',
            'thumb' => 'required',
            'price' => 'required',
            'series' => 'required|min:4|max:20',
            'sale_date' => 'required|min:10|max:10'
        ];
    }
}
