<?php

namespace Kallun\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Slang extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            'id'          => $this->id,
            'name'        => $this->name,
            'meaning'     => $this->meaning,
            'example'     => $this->example,
            'description' => $this->description,
        ];
    }
}
