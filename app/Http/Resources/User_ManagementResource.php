<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class User_ManagementResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id_user' => $this->id_user,
            'nama' => $this->nama,
            'email' => $this->email,
            'nomor_telepon' => $this->nomor_telepon,
            'status_aktif' => $this->status_aktif,
            'departement' => $this->departement,
            'created_at' => $this->created_at ? $this->created_at->toDateTimeString() : null,
            'updated_at' => $this->updated_at ? $this->updated_at->toDateTimeString() : null,
        ];
    }
}
