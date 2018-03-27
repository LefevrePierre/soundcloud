<div class="user__titres-fieldset"></div>
<ul class="user__playlists-container">
    @foreach ($playlists as $p)
        <li>
            <img src="{{$p->fichier}}"  />   </li>
            <li><a class="user__playlist-titre"href="">{{$p->nom}}</a></li>
           <li> <span class="user__playlist-nbr">tant de titres</span></li>

    @endforeach
</ul>
