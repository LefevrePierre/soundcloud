<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class chanson extends Model
{
    protected $table="chanson";
    public $timestamps=false;

    public function utilisateur(){
return $this->belongsTo("App\user", "utilisateur.id");
    }
    //
}
