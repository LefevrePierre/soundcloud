<ul>
    @foreach($musiques as $m)
        <img src="{{$m->img}}" alt="{{$m->nom}}"/>

        <li>
            <a href="#" class="chanson" data-file="{{$m->fichier}}" >{{$m->nom}}</a>
            <a href="/supprimerChanson/{{$m->id}}">x</a>

        </li>

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
  