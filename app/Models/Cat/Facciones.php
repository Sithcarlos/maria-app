<?php
declare(strict_types=1);
namespace App\Models\Cat;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Facciones extends Model
{
    use HasFactory;
    protected $fillable = [
        "nombre",
        "descripcion",
    ];
    public function razas(): HasMany
    {
        return $this->hasMany(Razas::class);
    }
}
