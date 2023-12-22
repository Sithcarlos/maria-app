<?php
declare(strict_types=1);
namespace App\Models\Rel;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RazasClases extends Model
{
    use HasFactory;
    protected $fillable = [
        "razas_id",
        "clases_id",
    ];
}
