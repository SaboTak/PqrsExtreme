<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Pqr extends Model
{
    use HasFactory;
    protected $fillable = [
        'ID',
        'PQR',
        'Asunto_PQR',
        'Usuario',
        'Estado',
        'created_at',
        'expires_at',
    ];

    public function save(array $options = [])
    {
        return parent::save( $options);
    }
}
