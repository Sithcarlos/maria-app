<?php
declare(strict_types=1);
namespace App\Http\Controllers;

use App\Http\Requests\StoreFaccionesRequest;
use App\Http\Requests\UpdateFaccionesRequest;
use App\Models\Cat\Facciones;

class FaccionesController extends Controller
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
    public function store(StoreFaccionesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Facciones $facciones)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Facciones $facciones)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFaccionesRequest $request, Facciones $facciones)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Facciones $facciones)
    {
        //
    }
}
