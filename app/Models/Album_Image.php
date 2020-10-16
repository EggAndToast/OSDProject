<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album_Image extends Model
{
    protected $table = 'album_images';

    protected $fillable = array('album_id','description','image');
}
