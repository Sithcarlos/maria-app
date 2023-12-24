<?php
declare(strict_types=1);
namespace App\Services;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class WowService
{
    public function getUsers()
    {
        return User::select('id', 'name')->get();
    }
    public function getGuilds()
    {
        return DB::table('guilds as gg')
                ->join('users as uu','gg.gm', '=', 'uu.id')
                ->select('uu.name as gm', 'gg.nombre')
                ->get();
    }
    public function getAvatares()
    {
        return DB::table('avatares as aa')
        ->join('users as uu','aa.propietario', '=', 'uu.id')
        ->join('clases as cc','aa.clase_id', '=', 'cc.id')
        ->select('aa.nombre','cc.nombre as clase','uu.name as propietario')
        ->get();
    }
}
