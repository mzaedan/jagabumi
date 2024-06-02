<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BeritaRequest extends FormRequest
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
            'judul_berita' => 'required|max:255',
            'lokasi' => 'required|max:255',
            'tanggal' => 'required',
            'penulis' => 'required|max:255',
            'foto' => 'image',
            'deskripsi' => 'required'
        ];
    }
}