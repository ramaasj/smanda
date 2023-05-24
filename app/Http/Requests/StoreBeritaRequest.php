<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBeritaRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    
    public function rules()
    {
        return [
            'judul' => ['required', 'max:100'],
            'kategori' => ['required', 'max:100'],
            'description' => ['required', 'max:1000'],
            'foto_berita' => 'required|image|mimes:jpeg,png,jpg|max:10240'
        ];
    }
}
