<ul>
    @foreach(Auth::user()->playlists as $p)
        <li>
            <img src="{{$p->fichier}}"  />
            <a href="">{{$p->nom}}</a>
            <form action="ajouterPlaylist" method="post" enctype="multipart/form-data">
                <input type="submit" name="ajouter" value="ajouter à la playlist"/>
            </form>
        </li>
    @endforeach
</ul>