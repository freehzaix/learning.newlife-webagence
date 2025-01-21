<?php

namespace App\Http\Controllers;

use App\Models\Niveau;
use Illuminate\Http\Request;

class NiveauController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $niveaux = Niveau::all();
        
        return view('niveau.index', ['niveaux' => $niveaux]);
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
        $request->validate([
            'libelle' => 'required',
        ]);

        $niveau = new Niveau();
        $niveau->libelle = $request->libelle;
        $niveau->save();

        return redirect()->route('niveau.index')->with('status', 'La niveau de compétence a bien été enregistré.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $niveau = Niveau::find($id);

        return view('niveau.show', ['niveau' => $niveau]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Niveau $niveau)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Niveau $niveau)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Niveau $niveau)
    {
        //
    }
}
