<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PortfolioResource extends JsonResource
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
            'id' => $this->id,
            'title' => $this->title,
            'photo' => $this->imagePath,
            'project' => $this->project,
            'host' => $this->host,
            'guest' => $this->guest,
            'preview' => $this->preview,
            'created' => $this->created_at->diffForHumans(),
            'link' => $this->youtube
        ];
    }
}
