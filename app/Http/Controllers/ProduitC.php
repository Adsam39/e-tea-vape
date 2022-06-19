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

        return view('produitallV',['enregAll'=>$enregAll, 'catAll'=>$catAll]);
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

    /*public function oneproduct(Request $request) {
        $produits = ProduitM::where('Cat_id',$request->id);
    }*/

    public function product() {

        return view('produit2');
    }

    public function searchproduct(Request $request) {

        $result = trim($request->search);

        $product = ProduitM::where('libellePdt','LIKE','%'.$result.'%')->get();

        return view('resultsearch',['product'=>$product]);
    }

}
