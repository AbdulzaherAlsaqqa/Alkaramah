<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ClupResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'name' => $this->name,
            'logo' => $this->logo,
            'establishment' => $this->establishment,
            'address' => $this->address,
            'founder_name' => $this->founder_name,
            'idea' => $this->idea,
            'first_fan' => $this->first_fan,
            'reputation' => $this->reputation,
            'Football' => $this->Football,
        ];
    }
}
