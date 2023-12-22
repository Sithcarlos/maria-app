<?php
declare(strict_types=1);
namespace App\Http\Controllers;

use App\Http\Requests\StoreGuildsRequest;
use App\Http\Requests\UpdateGuildsRequest;
use App\Models\Guilds;

class GuildsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreGuildsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Guilds $guilds)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Guilds $guilds)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGuildsRequest $request, Guilds $guilds)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Guilds $guilds)
    {
        //
    }
}
