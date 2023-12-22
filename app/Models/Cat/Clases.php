<?php
declare(strict_types=1);
namespace App\Models\Cat;

use App\Models\Avatares;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Clases extends Model
{
    use HasFactory;
    protected $fillable = [
        "nombre",
        "descripcion",
    ];
    /**
     * 
     */
    public function razas(): BelongsToMany
    {
        return $this->belongsToMany(Razas::class, 'razas_clases');
    }
    /**
     * 
     */
    public function avatares(): HasMany
    {
        return $this->hasMany(Avatares::class, 'clase_id');
    }
}
