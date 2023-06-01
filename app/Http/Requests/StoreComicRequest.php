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
        return true;
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
            'sale_date' => 'required|min:10|max:10',
            'Type' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'Il titolo è obbligatorio e deve avere minimo 3 caratteri',
            'title.min' => 'Il titolo deve avere almeno 3 caratteri',
            'title.max' => 'Il titolo deve avere meno di 30 caratteri',
            'description.required' => 'La descrizione è obbligatoria e deve avere minimo 10 caratteri',
            'description.min' => 'La descrizione deve avere almeno 10 caratteri',
            'description.max' => 'La descrizione deve avere meno di 100 caratteri',
            'thumb.required' => 'Il thumb è obbligatorio',
            'price.required' => 'Il prezzo è obbligatorio',
            'series.required' => 'La serie è obbligatoria',
            'series.min' => 'La serie deve avere minimo 4 caratteri',
            'series.max' => 'La serie deve avere meno di 21 caratteri',
            'sale_date.required' => 'La data di vendita è obbligatoria',
            'sale_date.min' => 'La data deve avere minimo 10 caratteri',
            'sale_date.max' => 'La data deve avere massimo 10 caratteri',
            'Type.required' => 'La tipologia è obbligatoria'
        ];
    }
}
