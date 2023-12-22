<?php
declare(strict_types=1);
namespace App\Http\Controllers;

use App\Http\Requests\StoreClasesRequest;
use App\Http\Requests\UpdateClasesRequest;
use App\Models\Cat\Clases;

class ClasesController extends Controller
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
    public function store(StoreClasesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Clases $clases)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Clases $clases)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateClasesRequest $request, Clases $clases)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Clases $clases)
    {
        //
    }
}
