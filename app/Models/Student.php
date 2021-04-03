<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\models\Inscription;

class Student extends Model
{
    use HasFactory;

   protected $fillable = [
    	'prenoms',
    	'nom',
    	'datnais',
    	'lieunais',
    	'sexe',
    	'matricule',
    	'classe_doub',
    	'num_extrait',
    	'contact_eleve',
    	'contact_parent',
    	'pere',
    	'mere',
    	'tuteur',
    	'adresse',
    	'photo'    	
    ];

    public function inscriptions()
    {
       return $this->hasMany(Inscription::class);
    }

    public function getNomCompletAttribute()
    {
        return $this->prenoms . ' ' . $this->nom;
    }

}
