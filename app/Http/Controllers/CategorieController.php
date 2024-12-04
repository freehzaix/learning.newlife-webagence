<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Categorie::all();
        
        return view('categorie.index', ['categories' => $categories]);
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

        $categorie = new Categorie();
        $categorie->libelle = $request->libelle;
        $categorie->save();

        return redirect()->route('categorie.index')->with('status', 'La catégorie de cours a bien été enregistré.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $categorie = Categorie::find($id);

        return view('categorie.show', ['categorie' => $categorie]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        //Enregistrer les modifications d'une categorie
        $categorie = Categorie::find($request->id);
        $categorie->libelle = $request->libelle;
        $categorie->save();

        return redirect()->route('categorie.index')->with('status', 'La catégorie de cours a bien été modifié.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Supprimer la categorie
        $categorie = Categorie::find($id);
        $categorie->delete();
        
        return redirect()->route('categorie.index')->with('status', 'La catégorie de cours a bien été supprimé.');
    }
}
