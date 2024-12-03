<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
    * Traitement du formulaire de contact *
    */
    public function store(Request $request)
    {
        $request->validate([
            'nom_prenom' => 'required',
            'email' => 'required|email',
            'objet' => 'required',
            'telephone' => 'required',
            'message' => 'required',
        ]);

        $contact = new Contact();
        $contact->nom_prenom = $request->nom_prenom;
        $contact->email = $request->email;
        $contact->objet = $request->objet;
        $contact->telephone = $request->telephone;
        $contact->message = $request->message;
        $contact->save();

        return redirect('/contact')->with('status', 'Votre message a bien été envoyé à l\'entreprise NewLife Webagence.');
    }
    
}
