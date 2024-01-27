<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class FanResource extends JsonResource
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
            'about' => $this->about,
            'images' => $this->images,
        ];
    }
}
