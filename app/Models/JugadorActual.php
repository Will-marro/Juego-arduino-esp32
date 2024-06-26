<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JugadorActual extends Model
{
    use HasFactory;


    protected $table = 'jugador_actual';

    protected $fillable = [
        'user_id',
        'esta_jugando'
    ];

    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');

    }

}
