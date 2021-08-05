<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = 'baiviet';
    protected $primaryKey = 'id';

    protected $guarded = [];
}
