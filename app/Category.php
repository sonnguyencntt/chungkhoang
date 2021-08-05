<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'danhmucbaiviet';
    protected $primaryKey = 'id';

    protected $guarded = [];
}
