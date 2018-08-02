<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    protected $table = 'series';
    protected $fillable = [
        'tour_id',
        'cant_person',
        'price',
        'date_start',
        'date_end'
    ];
}
