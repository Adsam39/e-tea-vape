<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\LiquideM;

class LiquideC extends Controller
{
    public function newliquide()
    {
        return view('personnaliser');
        //  Appel vue contenant un formulaire de création d'un produit

    }

    public function newsaveliquide(Request $request) {
        
        $data = new LiquideM();

        $data->goutPdtP = $request->txtLib;
        $data->gout2 = $request->txtLib;
        $data->gout3 = $request->txtLib;
        $data->gout4 = $request->txtLib;;
        $data->gout5 = $request->txtLib;
        $data->gout6 = $request->txtLib;
        $data->gout7 = $request->txtLib;
        $data->gout8 = $request->txtLib;
        $data->qteGout = $request->txtPrix;
        $data->qteVapeur = $request->txtStock;
        $data->doseNicotine = $request->txtLib;
        $data->qteLiquideP = $request->txtPrix;
        $data->pointFidel = $request->txtStock;

        $data->save();

        return redirect()->action('App\Http\Controllers\ProduitC@all');
    }
}
