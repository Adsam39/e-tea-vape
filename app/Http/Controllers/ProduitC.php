<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\ProduitM;
use App\Models\CategorieM;

class ProduitC extends Controller
{
    public function all()
    {
        $enregAll = ProduitM::all();

        $catAll = CategorieM::all();
		
        $enregCount = ProduitM::all()->count();

        $MaxStock = ProduitM::all()->max('stockPdt');
        $enregMaxStock=ProduitM::all()->where('stockPdt',$MaxStock)->first();

        return view('produitallV',['enregAll'=>$enregAll, 'catAll'=>$catAll, 'enregCount'=>$enregCount,'enregMaxStock'=>$enregMaxStock]);
    }

    public function newp()
    {
        $enregAll = categorieM::all();
		
        return view('formnewproduitV',['enregAll'=>$enregAll]);
        //  Appel vue contenant un formulaire de création d'un produit

    }

    public function newsave(Request $request)
    {
        $data = new ProduitM();

        $data->libellePdt = $request->txtLib;
        $data->prixPdt = $request->txtPrix;
        $data->stockPdt = $request->txtStock;

        // Bien que l'idCat soit récupéré dans le Form, l'ORM Eloquent a besoin de récupérer
        // l'objet catégorie du produit à créer dans la bd (cf ci-dessous)
        $categ = CategorieM::where('idCat', $request->cboCat)->first();

        $data->sacateg()->associate($categ);

        $data->save();

        return redirect()->action('App\Http\Controllers\ProduitC@all');    
    }

}
