<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_Management extends Model
{
    use HasFactory;

    protected $table = 'user_management';
    protected $primaryKey = 'id_user';

    protected $fillable = [
        'nama',
        'email',
        'nomor_telepon',
        'status_aktif',
        'departement',
    ];

    protected $casts = [
        'status_aktif' => 'boolean',
        'created_at' => 'datetime:Y-m-d H:i:s',
        'updated_at' => 'datetime:Y-m-d H:i:s',
    ];
}
