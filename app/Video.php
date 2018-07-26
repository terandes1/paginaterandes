<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{

    protected $fillable = [
      'multimedia_id',
      'name',
      'path',
      'size'
    ];
}
