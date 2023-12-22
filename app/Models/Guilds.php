<?php
declare(strict_types=1);
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Guilds extends Model
{
    use HasFactory;
    protected $fillable = [
        "activa",
        "borrar",
        "dc",
        "gm",
        "informacion",
        "mensaje",
        "nombre",
        "tg",
        "uc_modifico",
        "wh",
    ];

    protected $casts = [
        'activa' => 'boolean',
        'borrar' => 'boolean',
    ];
    public function propietario(): BelongsTo
    {
        return $this->belongsTo(User::class, 'gm');
    }
    public function modifico(): BelongsTo
    {
        return $this->belongsTo(User::class, 'uc_modifico');
    }
    public function avatares(): HasMany
    {
        return $this->hasMany(Avatares::class,'guild_id');
    }
}
