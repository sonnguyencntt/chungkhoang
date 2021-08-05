<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BlogResource extends JsonResource
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
            'id_bai_viet' => $this->id_bai_viet,
            'hinh_anh' => $this->hinh_anh,
            'tieu_de' => $this->tieu_de,
            'noi_dung' => $this->noi_dung,
            'ngay_dang' => $this->ngay_dang,
            'id_danh_muc' => $this->id_danh_muc,

        ];
    }
}
