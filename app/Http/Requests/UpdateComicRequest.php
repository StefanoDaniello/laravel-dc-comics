<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateComicRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|max:255|min:5',
            'description' => 'nullable',
            'thumb' => 'nullable|max:255', 
            'price' => 'required|numeric|min:1', 
            'series' => 'required|max:255|min:1',
            'sale_date' => 'required|date', 
            'type' => 'required|max:20',
        ];
    }
    public function message(){
        return [
            'title.required' => 'Il titolo è obbligatorio.',
            'title.max' => 'Il titolo non può superare i :255 caratteri.',
            'title.min' => 'Il titolo deve essere di almeno : 5 caratteri.',
            'thumb.max' => 'La lunghezza massima del thumbnail è :255 caratteri.',
            'price.required' => 'Il prezzo è obbligatorio.',
            'price.numeric' => 'Il prezzo deve essere un valore numerico.',
            'price.min' => 'Il prezzo deve essere almeno :1.',
            'series.required' => 'La serie è obbligatoria.',
            'series.max' => 'La serie non può superare :max caratteri.',
            'series.min' => 'La serie deve essere di almeno : 1 caratteri.',
            'sale_date.required' => 'La data di vendita è obbligatoria.',
            'sale_date.date' => 'La data di vendita non è valida.',
            'type.required' => 'Il tipo è obbligatorio.',
            'type.max' => 'Il tipo non può superare :20 caratteri.',
        ];
    }
}
