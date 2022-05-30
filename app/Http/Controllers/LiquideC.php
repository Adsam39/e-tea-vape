<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\LiquideM;
use App\Models\GoutM;
use App\Models\GouterM;

class LiquideC extends Controller
{
    //REQUETES GET
    public function newliquide()
    {
        return view('personnaliser');
    }

    public function newgout()
    {
        $enregAll = GoutM::all();

        return view('personnaliser2', ['enregAll'=>$enregAll]);
        //  Appel vue contenant un formulaire de création d'un produit

    }

    public function liquidefinal()
    {
        return view('personnaliser3');
    }

    //REQUETES POST
    public function newsaveliquide(Request $request) {
        
        $data = new LiquideM();

        $range = $request->rangegout;

        $range = 100 - $range;

        $data->qteGout = $request->rangegout;
        $data->qteVapeur = $range;
        $data->doseNicotine = $request->rangenicotine;
        $data->qteLiquideP = $request->optqte;

        $data->save();

        return redirect()->action('App\Http\Controllers\LiquideC@newgout');  
    }

    public function newgoutersave(Request $request)
    {
       $data = new GouterM();

       $maxperso=LiquideM::max('idPdtP');

       $data->Perso_id = $maxperso;
    
        var_dump($request->chkgout);

        /*for($i=0;$i=count($request->chkgout);$i++)
        {
            $data->Gout_id = $request->chkgout[$i];
        }*/

        foreach($request->chkgout as $lesgouts)
        {
            if($lesgouts == true)
            {
                $data->Gout_id = $lesgouts;
            }
        }

        $data->save();

        //return redirect()->action('App\Http\Controllers\LiquideC@liquidefinal');

        /*for($i=0;$i<count($request->chkgout);$i++)
        {
            $data->Gout_id = $request->chkgout[$i];
            //var_dump($data);
            //$this->datasave($data);
        }*/

    }
}