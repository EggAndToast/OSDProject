<?php

namespace App\Models\Album;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $table = 'albums';

    protected $fillable = array('title','description','cover_image');

    public function Photos(){

    return $this->has_many('album_images');
  }
}
