<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateUser_ManagementRequest extends FormRequest
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
        $id_user = $this->route('user_management') ? $this->route('user_management')->id_user : null;

        return [
            'nama' => 'sometimes|required|string|max:255',
            'email' => [
                'sometimes',
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique('user_management', 'email')->ignore($id_user, 'id_user'),
            ],
            'nomor_telepon' => 'sometimes|required|string|digits_between:10,15',
            'status_aktif' => 'sometimes|required|boolean',
            'departement' => 'sometimes|required|string|max:100',
        ];
    }
}
