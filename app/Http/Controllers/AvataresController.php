<?php
declare(strict_types=1);
namespace App\Http\Controllers;

use App\Http\Requests\StoreAvataresRequest;
use App\Http\Requests\UpdateAvataresRequest;
use App\Models\Avatares;
use App\Services\AvataresService;

class AvataresController extends Controller
{
    private AvataresService $AvataresS;
    public function __construct(AvataresService $AvataresService)
    {
        $this->AvataresS = $AvataresService;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $razas_clases = $this->AvataresS->getRazasClases();
        $avatares = [];
        return view('wow/avatares', compact(['razas_clases', 'avatares']));
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
    public function store(StoreAvataresRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Avatares $avatares)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Avatares $avatares)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAvataresRequest $request, Avatares $avatares)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Avatares $avatares)
    {
        //
    }
}
