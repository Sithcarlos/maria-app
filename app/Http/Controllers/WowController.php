<?php
declare(strict_types=1);
namespace App\Http\Controllers;

use App\Services\WowService;
class WowController extends Controller
{
    private WowService $WowS;
    public function __construct(WowService $wowService) {
      $this->WowS =$wowService;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = $this->WowS->getUsers();
        $guilds= $this->WowS->getGuilds();
        $avatares = $this->WowS->getAvatares();
        return view('wow/main', compact(['users','guilds','avatares']));
    }
}
