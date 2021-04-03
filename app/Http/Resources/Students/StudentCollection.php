<?php

namespace App\Http\Resources\Students;

use Illuminate\Http\Resources\Json\JsonResource;

class StudentCollection extends JsonResource
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
            
            'nom complet'       =>  $this->NomComplet,
            'Date de naissance' =>  $this->datnais,
            'Lieu de naissance' =>  $this->lieunais,
            'sexe'              =>  $this->sexe,
            'Matricule'         =>  $this->matricule,
            'href'              =>  [
                    'link' => route('students.show', $this->id)
                ]  
        ];
    }
}
