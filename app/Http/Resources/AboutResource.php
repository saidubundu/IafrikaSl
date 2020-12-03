<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AboutResource extends JsonResource
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
            'name' => $this->first_name  . $this->last_name,
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'age' => $this->age,
            'bio' => $this->biography,
            'email' => $this->email,
            'image' => $this->imagePath,
            'facebook' => $this->facebook,
            'whatsapp' => $this->whatsapp,
            'twitter' => $this->twitter,
            'instagram' =>$this->instagram,
            'address' => $this->address,
            'language' => $this->language,
            'nationality' => $this->nationality,
            'phone' => $this->phone,
            'created' => $this->created_at->diffForHumans()
        ];
    }
}
