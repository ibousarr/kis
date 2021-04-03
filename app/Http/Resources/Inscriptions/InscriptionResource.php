<?php

namespace App\Http\Resources\Inscriptions;

use Illuminate\Http\Resources\Json\JsonResource;

class InscriptionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        //dd($request);
        return [

            'type'          =>  $this->type,
            'Année'         =>  $this->anneescolaire,
            'Inscription'   =>  $this->montant==6000 ? 'Inscrit' : 'Reste : '. $this->reste,
            'BFEM'          =>  $this->bfem,
            'Dossier'       =>  $this->dossier,
            'Classe'        =>  $this->classe->libclasse

        ];
    }
}
