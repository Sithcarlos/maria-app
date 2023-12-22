<?php
declare(strict_types=1);
namespace App\Models\Cat;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Razas extends Model
{
    use HasFactory;
    protected $fillable = [
        "nombre",
        "descripcion",
        "facciones_id",
    ];
    /**
     * 
     */
    public function facciones(): BelongsTo
    {
        return $this->belongsTo(Facciones::class);
    }
    /**
     * 
     */
    public function clases(): BelongsToMany
    {
        return $this->belongsToMany(Clases::class, 'razas_clases');
    }
    /**
     * 
     */
    public function avatares(): HasMany
    {
        return $this->hasMany(\App\Models\Avatares::class, 'raza_id');
    }
}
