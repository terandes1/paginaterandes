<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $table = 'videos';
    protected $fillable = [
      'multimedia_id',
      'name',
      'description',
      'path'
    ];
}
