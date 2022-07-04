<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Music;

class MusicController extends Controller
{
    public function musicList(){
        $musicList = Music::where('user_id', auth()-> user()->id)
        ->orderBy('created_at','desc')
        ->limit(100)
        ->get();

        return view('musics.listeners',['musicList'=>$musicList]);
    }
    public function create(){
        return view('musics.create');
    }
    public function store(Request $request){
        $request->validate([
            'title' => 'string|required',
            'singer' => 'string|required',
            'genre' => 'string|required',
            'year_of_release' => 'string|required',
        ]);

        $lis = Music::create([
                'user_id'=> auth()-> user()-> id,
                'title' => $request->title,
                'singer' => $request->singer,
                'genre' => $request->genre,
                'year_of_release' => $request->year_of_release,
        ]);
        return redirect('/musics/'. $lis->id) ->with('Info', 'New Post Created');
    }
    public function show(Music $lis){
        return view('musics.view', ['lis'=>$lis]);
    }
    public function edit(Music $lis){
        return view('musics.edit', ['lis'=>$lis]);
    }
    public function update(Music $lis, Request $request){
        $request->validate([
            'title' => 'string|required',
            'singer' => 'string|required',
            'genre' => 'string|required',
            'year_of_release' => 'string|required',
        ]);
        $lis->update($request->all());

        return redirect('/musics/' . $lis->id);
    }
    public function recentMusic(){

        $recentMusic = Music::orderBy('created_at','desc')->limit(100)->get();

         return view('musics.recent', ['recentMusic'=>$recentMusic]);
    }

    public function open(Music $lis){

        return view('musics.open', ['lis'=>$lis]);

    }
   public function delete($id){

        $lis = Music::findOrFail($id);
        $lis->delete();

        return redirect('/musics/listeners');

   }
   public function list(Music $lis){

    return view('musics.view', ['lis'=>$lis]);

   }
}
