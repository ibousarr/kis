<?php

namespace App\Http\Resources\Students;

use Illuminate\Http\Resources\Json\JsonResource;

class StudentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'prenoms'           =>  $this->prenoms,
            'nom'               =>  $this->nom,
            'né(e) le'           =>  $this->datnais,
            'lieunais'          =>  $this->lieunais,
            'sexe'              =>  $this->sexe,
            'matricule'         =>  $this->matricule,
            'classe_doub'       =>  $this->classe_doub,
            'num_extrait'       =>  $this->num_extrait,
            'contact_eleve'     =>  $this->contact_eleve,
            'contact_parent'    =>  $this->contact_parent,
            'pere'              =>  $this->pere,
            'mere'              =>  $this->mere,
            'tuteur'            =>  $this->tuteur,
            'adresse'           =>  $this->adresse,
            'photo'             =>  $this->photo,
            'nom complet'       =>  $this->NomComplet   


        ];
    }
}
