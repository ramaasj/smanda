<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreKepsekRequest extends FormRequest
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
            'foto_kepsek' => 'required|image|mimes:jpeg,png,jpg|max:10240',
            'nama' => ['required', 'max:200'],
            'nip' => ['required', 'max:200'],
            'pangkat' => ['required', 'max:100'],
            'pendidikan' => ['required', 'max:200'],
            'masa_kerja' => ['required', 'max:100'],
        ];
    }
}
