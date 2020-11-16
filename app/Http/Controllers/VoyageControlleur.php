<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Voyage;

class VoyageControlleur extends Controller
{
    public function afficherAll() {
        $lesVoyages = Voyage::all();
        //dd($lesVoyages);
        return view('welcome')->with('lesVoyages', $lesVoyages);
    }

    public function afficher($id) {
        $unVoyage = Voyage::find($id);
        //dd($unVoyage);
        return view('voyage')->with('unVoyage', $unVoyage);
    }
}
