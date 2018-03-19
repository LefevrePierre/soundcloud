<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Playlist extends Model
{
    protected $table="playlist";
    public $timestamps=false;
    //

    public function chansons() {
        return $this->belongsToMany("App\chanson", "contient", "chanson_id", "playlist_id");
    }
}
