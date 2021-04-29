<?php

namespace App\Http\Resources;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Http\Resources\Json\JsonResource;

class EventResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $requestClientPreferredHairCutResource
     * @return array
     */

    public function toArray($request = null)
    {
        return [
            'id'              => $this->id,
            'name'            => $this->name,
            'created_at'      => $this->created_at, 
            'updated_at'      => $this->updated_at,
            'workshops'       => $this->getWorkShops
       ];
    }
}
