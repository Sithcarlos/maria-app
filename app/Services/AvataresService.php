<?php
declare(strict_types=1);
namespace App\Services;

use Illuminate\Support\Facades\DB;

class AvataresService
{
    public function getRazasClases()
    {
        return DB::table('razas_clases as rrcc')
            ->join('clases as cc', 'rrcc.clases_id', '=', 'cc.id')
            ->join('razas as rr', 'rrcc.razas_id', '=', 'rr.id')
            ->select('rr.nombre as raza', 'cc.nombre as clase', 'rr.id as raza_id', 'cc.id as clase_id')
            ->get();
    }
}
