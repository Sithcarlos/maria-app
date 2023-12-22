<?php

declare(strict_types=1);

namespace App\Models;

use App\Models\Cat\Clases;
use App\Models\Cat\Razas;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Avatares extends Model
{
    use HasFactory;

    protected $fillable = [
        "borrar",
        "clase_id",
        "comentario",
        "guild_id",
        "main",
        "nombre",
        "propietario",
        "rango",
        "raza_id",
        "uc_modifico",
    ];

    protected $casts = [
        'borrar' => 'boolean',
        'main' => 'boolean',
    ];

    public function propietario_id(): BelongsTo
    {
        return $this->belongsTo(User::class, 'propietario');
    }

    public function clase(): BelongsTo
    {
        return $this->belongsTo(Clases::class);
    }
    public function raza(): BelongsTo
    {
        return $this->belongsTo(Razas::class);
    }
    public function guild(): BelongsTo
    {
        return $this->belongsTo(Guilds::class,'guild_id');
    }
}
