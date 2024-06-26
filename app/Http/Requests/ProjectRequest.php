<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectRequest extends FormRequest
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
            'nama_kegiatan' => 'required|max:255',
            'lokasi' => 'required|max:255',
            'foto' => 'image',
            'tanggal' => 'required|date',
            'deskripsi' => 'required',
            'tempat_kumpul' => 'required|max:255',
            'batas_registrasi' => 'required|max:255',
            'status_project' => 'required',
            'link' => 'required|max:255'
        ];
    }
}
