<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEkstrakurikulerRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        return [
            'naama_ekskul' => ['required', 'max:100'],
            'foto_ekskul' => 'required|image|mimes:jpeg,png,jpg|max:10240'
        ];
    }
}