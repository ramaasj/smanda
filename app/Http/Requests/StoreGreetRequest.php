<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreGreetRequest extends FormRequest
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
            'gambar_greet' => 'required|image|mimes:jpeg,png,jpg|max:10240',
            'tahun_greet' => ['required', 'max:100'],
            'desc_tahun' => ['required', 'max:200'],
            'siswa_greet' => ['required', 'max:100'],
            'desc_siswa' => ['required', 'max:200'],
            'pendidik_greet' => ['required', 'max:100'],
            'desc_pendidik' => ['required', 'max:200'],
        ];
    }
}
