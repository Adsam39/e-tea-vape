<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GoutM extends Model
{
    use HasFactory;

    protected $table = 'gout';  // Nom de la table dans la bd

    protected $primaryKey = 'IdGout';  // Nom de la CP. Obligatoire si différente de id

    protected $fillable=['libelleGout'];
    // Liste des champs modifiables par l'application  obligatoire.

    public $timestamps = false; 
}
