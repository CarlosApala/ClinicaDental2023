<?php

namespace App\Http\Controllers;

use App\Models\DiaAtencion;
use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid;

class DiaAtencionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $dia = DiaAtencion::where('dia', 'lunes')->first();
        /* $listaValores=[];
        foreach ($dia as $key => $value) {
            Log::info("valores".$key);
        }
        $uuid=Uuid::uuid4(); */
        return $dia;
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(DiaAtencion $diaAtencion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DiaAtencion $diaAtencion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DiaAtencion $diaAtencion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DiaAtencion $diaAtencion)
    {
        //
    }
}
