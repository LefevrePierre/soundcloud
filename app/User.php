<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function musiques()
    {
        return $this->hasMany("App\chanson", "utilisateur_id");

    }

    public function playlists()
    {
        return $this->hasMany("App\Playlist", "utilisateur_id");

    }

    public function jeLesSuit()
    {
        return $this->belongsToMany("App\User", "suit", "suiveur_id", "suivi_id");
    }

    public function ilsMeSuivent()
    {
        return $this->belongsToMany("App\User", "suit", "suivi_id", "suiveur_id");
    }
}
