<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ArrangementResource extends JsonResource
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
            'team_name' => $this->team_name,
            'play' => $this->play,
            'win' => $this->win,
            'equal' => $this->equal,
            'lost' => $this->lost,
            'points' => $this->points,
        ];
    }
}
