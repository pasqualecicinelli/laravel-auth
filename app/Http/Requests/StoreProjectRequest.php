<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
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
            'name_prog' => ['required', 'string', 'max:30'],
            'repo' => ['required', 'string', 'max:50'],
            'link' => ['required', 'url',],
            'description' => ['string'],
            'slug' => ['string', 'max:30']
        ];
    }
    //Continuare con le validation
    public function messages()
    {
        return [
            'name_prog.required' => 'Il nome è obbligatorio',
            'name_prog.string' => 'Il nome deve essere una string',
            'name_prog.max' => 'Il nome deve essere massimo di 30 caratteri'
        ];
    }

}