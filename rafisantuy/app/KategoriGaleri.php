<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KategoriGaleri extends Model
{
    protected $fillable = [
        'name','users_id',
    ];

    protected $casts = [

    ];
}
