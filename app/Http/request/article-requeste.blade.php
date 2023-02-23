<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name'=>'required|min:10|max:50',
            'email'=>'required|min:10|max:50',
            'body'=>'required|min:10|max:500',
        ];
    }

    public function messages()
    {
        return [
            'name.required'=>'Il nome è obbligatorio',
            'email.required'=>'l \' email è obbligatoria',
            'body.required'=>'Il messaggio è obbligatorio',
            'name.min'=>'Inserire minimo 10 caratteri',
            'name.max'=>'Inserire massimo 50 caratteri',
            'email.min'=>'Inserire minimo 10 caratteri',
            'email.max'=>'Inserire massimo 50 caratteri',
            'body.min'=>'Inserire minimo 10 caratteri',
            'body.max'=>'Inserire massimo 500 caratteri',
        ];
    }
}