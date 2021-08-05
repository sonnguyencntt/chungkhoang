<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'lienhekhachhang';
    protected $primaryKey = 'id';

    protected $guarded = ['id_lien_he_khach_hang'];
}
