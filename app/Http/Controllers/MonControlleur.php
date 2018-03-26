<?php

namespace App\Http\Controllers;
use App\chanson;
use App\Playlist;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;

class MonControlleur extends Controller
{
    function __construct()
    {
        $utilisateurs = User::whereRaw("1 = 1")->orderBy('id','desc')->offset(0)
            ->limit(5)
            ->get();
        //print_r($utilisateurs);
        View::share('utilisateurs', $utilisateurs);

        $playlists = Playlist::where("utilisateur_id ", Auth::id())->orderBy('name','desc')->offset(0)
            ->limit(10)
            ->get();
        //print_r($utilisateurs);
        View::share('playlists', $playlists);

    }

    public function index()
    {

        return view('index',['chansons'=> Chanson::all()]);
    }
    public function formulairechanson()
    {
        return view('formulairechanson');
    }

    public function creerchanson(Request $request) {


        $validator = Validator::make($request->all(), [
            'nom' => 'required|min:6'

        ]);
          /*  $validatedData = $request->validate([
                'nom' => 'required|min:6'

            ])*/
            if ($validator->fails()) {
                return redirect('/formulairechanson')
                    ->withErrors($validator)
                    ->withInput()
                    ->with('toastr', ['statut' => 'error','message' => 'Erreur']);
            }

        if ($request->hasFile('chanson') && $request->file('chanson')->isValid()) {
            $m = new chanson();
            $m->fichier = $request->file('chanson')->store("public/chansons/". Auth::id());
            $m->fichier = str_replace("public/", '/storage/',$m->fichier);
            $m->img = $request->file('img')->store("public/img/". Auth::id());
            $m->img = str_replace("public/", '/storage/',$m->img);
            $m->nom = $request->input('nom');
            $m->style = $request->input('style');
            $m->post_date = date("Y-m-d");
            $m->utilisateur_id = Auth::id();
            $m->save();
        }

        return redirect('/')->with('toastr', ['statut' => 'success','message' => 'Votre musique est maintenant disponible !']);
    }

    public function utilisateur($id)
    {
        $utilisateur = User::find($id);
        if ($utilisateur==false)
            abort(404);
        return view("utilisateur",['utilisateur'=>$utilisateur]);
    }

    public function changerSuivi($id)
    {
        $utilisateur = User::find($id);
        if ($utilisateur == false) {
            return redirect('/')->with('toastr', ['statut' => 'error','message' => 'Erreur']);
        }
        Auth::user()->jeLesSuit()->toggle($id);
        return back()->with('toastr', ['statut' => 'success','message' => 'Suivi modifié']);


    }
    public function playlists() {

        return view('playlists');

    }

    public function playlist($id)
    {
        $playlist = Playlist::find($id);
        if ($playlist==false)
            abort(404);
        return view("playlist",['playlist'=>$playlist]);
    }

    public function creerPlaylist(Request $request) {

    $p = new Playlist();
    $p->nom = $request->input('nom');
    $p->description = $request->input('description');
    $p->utilisateur_id = Auth::id();
    $p->save();
    return redirect('/listPlaylists');

}
    public function afficherPlaylists($id) {
        $utilisateur = User::find($id);
        if ($utilisateur==false)
            abort(404);


    }


    public function supprimerChanson(Request $request, $id){
        $chanson = Chanson::find($id);
        if($chanson->utilisateur_id != Auth::id())
            return redirect("/");
        $chanson->delete();
        return redirect("/utilisateur/$id");

    }

    public function supprimerPlaylist(Request $request, $id){
        $playlist = Playlist::find($id);
        if($playlist->utilisateur_id != Auth::id())
            return redirect("/");
        $playlist->delete();
        return redirect("/");

    }

    public function playlistAjout (Request $request,$idP,$idM){
        $p = Playlist::find($idP);
        if(!$p->chansons->contains($idM))
            $p->chansons()->attach($idM);
        return back();

}

    public function recherche ($s){
        $users = User::whereRaw("name LIKE CONCAT(?,'%')", [$s])->get();
        $chansons = Chanson::whereRaw("nom LIKE CONCAT(?,'%')", [$s])->get();
        return view("recherche",['utilisateurs'=>$users,'chansons'=>$chansons]);


    }
    public function testAjax(){
        return redirect ('/recherche/pa');
    }

}