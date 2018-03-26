@foreach($utilisateurs as $u)
    <li>
        <a href="/utilisateur/{{$u->id}}" data-pjax>{{$u->name}}</a>
    </li>
@endforeach