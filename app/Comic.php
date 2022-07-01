<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{

    protected $fillable = [

        'title',
        'description',
        'thumb',
        'priceseries',
        'sale_date',
        'type',
        'data',
    ];
};
