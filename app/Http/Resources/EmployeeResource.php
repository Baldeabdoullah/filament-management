<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class EmployeeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'Nom' => $this->first_name,
            'Prenom' => $this->last_name,
            'Adresse' => $this->address_name,
            'IdPays' => $this->country_id,
            'IdEtat' => $this->state_id,
            'IdVille' => $this->city_id,
            'Nom' => $this->first_name,
            'IdDepartement' => $this->department_id,
            'code employe' => $this->zip_code,
            'Naissance' => $this->birth_date,
            'Arrive' => $this->date_hired,

        ];
    }
}
