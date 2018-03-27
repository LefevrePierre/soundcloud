<ul>
    @foreach($musiques as $m)


        <div class="user__titres-fieldset"></div>
    <ul class="user__titres-container">



            <li><a href="#" class="chanson user__play" data-file="{{$m->fichier}}"><span>&#9658;</span></a></li>

            <li><div class="user__chanson-img" style="background-image: url({{$m->img}})"</div></li>
           <li> <a href="#" class="chanson user__titre" data-file="{{$m->fichier}}" >{{$m->nom}}</a></li>
        <li><span>{{$m->duree}}</span></li>
          <li> <span>{{$m->style}}</span></li>
        <li><a class="user__delete"href="/supprimerChanson/{{$m->id}}">supprimer</a></li>

</ul>

        <ul>
            @auth
            @foreach(Auth::user()->playlists as $p)
                <li>
                    <img src="{{$p->fichier}}"/>
                    <span>{{$p->nom}}</span>
                    <form action="/playlistAjout/{{$p->id}}/{{$m->id}}" method="post" enctype="multipart/form-data">
                        <input type="submit" name="ajouter" value="ajouter à la playlist"/>
                        {{csrf_field()}}
                    </form>
                    <a href="/supprimerPlaylist/{{$p->id}}">x</a>
                </li>
            @endforeach
                @endauth
        </ul>
    @endforeach

</ul>
  