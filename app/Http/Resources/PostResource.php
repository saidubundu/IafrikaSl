<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
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
            'author_id' => $this->author_id,
            'author_name' => $this->authorId,
            'body' => $this->bodyHtml,
            'path' => $this->path,
            'category_id' => $this->category_id,
            'category' => $this->category,
            'created' => $this->created_at->diffForHumans(),
            'excerpt' => $this->excerpt,
            'featured' => $this->featured,
            'id' => $this->id,
            'image' => $this->imagePath,
            'slug' => $this->slug,
            'status' => $this->status,
            'title' => $this->title,
            'day' => $this->date,
            'month' => $this->month,
            'year' => $this->year
        ];
    }
}
