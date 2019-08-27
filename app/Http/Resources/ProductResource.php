<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
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
            'name' => $this->name,
            'price' => $this->price,
            'image' => $this->image,
            'description' => $this->description,
            'destacado' => $this->featured ? $this->featured : 'false',
            'category_id' => $this->category_id,
            'brand_id' => $this->brand_id
        ];
    }
}
