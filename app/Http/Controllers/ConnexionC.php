<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\ConnexionM;

class ConnexionC extends Controller
{
    //
    public function signin()
    {
        return view('connexionV');
    }

    public function signup()
    {
        return view('inscriptionV');
    }

    public function newcustomer(Request $request)
    {
        $data = new ConnexionM();

        
    }
}
