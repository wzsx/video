<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class VideoModel extends Model
{
    //

    protected $table='video';
    public $timestamps=false;
    public $primaryKey='vid';
}
