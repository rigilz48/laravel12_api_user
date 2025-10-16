<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUser_ManagementRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nama' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:user_management,email',
            'nomor_telepon' => 'required|string|digits_between:10,15',
            'status_aktif' => 'required|boolean',
            'departement' => 'required|string|max:100',
        ];
    }
}
