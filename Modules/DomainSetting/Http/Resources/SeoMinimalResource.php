<?php

namespace Modules\DomainSetting\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class domainsMinimalResource extends JsonResource
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
            'title' => $this->value ? $this->value : '',
            'description' => $this->description ? $this->description : '',
            'popup_contact_us_title' => $this->popup_contact_us_title ? $this->popup_contact_us_title : '',
        ];
    }
}
