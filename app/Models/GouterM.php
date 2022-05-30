<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GouterM extends Model
{
    use HasFactory;

    protected $table = 'gouter';  // Nom de la table dans la bd

    protected $primaryKey = 'Perso_id';  // Nom de la CP. Obligatoire si différente de id

    protected $fillable=['Perso_id', 'Gout_id'];
    // Liste des champs modifiables par l'application  obligatoire.

    public $timestamps = false; 
    //By default, Eloquent expects created_at and updated_at columns to exist on your tables. If you do not wish to have these columns automatically managed by Eloquent, set the $timestamps property on your model to false.

    public function songout()
    {
	    // Création d'une méthode pour assurer le lien entre un produit 
        // et sa catégorie
	    // Nom du modèle de la categorie obligatoire. 2nd param : nom de la CE
        return $this->belongsTo('App\Models\GoutM','Gout_id');
    }
}
