<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategorieM extends Model
{
    use HasFactory;
    protected $table = 'categorie';

    protected $primaryKey = 'idCat';  

    protected $fillable=['libelleCat'];
    public $timestamps = false;
}