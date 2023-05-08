<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class NoteController extends Controller
{
    //
    public function __construct(){
        $this->middleware('auth');
    }
    public function create(){
        return view('notes.create');
    }

    public function show(){
        $notes = Auth::user()->notes()->get();

        return view('notes.show', compact('notes'));
    }

    //Funcion para recoger datos del form

    public function store(StoreRequest $request){
        $note = new Note;

        $note->title = $request->title;
        $note->description = $request->description;

        Auth::user()->notes()->save($note);


        
        $title = $request->title;
        $description = $request->description;
        $user_id = $request->user_id;

        DB::table('post-it')->insert([
            'title' => $title,
            'description'=> $description,
            'user_id' => $user_id
        ]);


        return redirect()->route('notes.show');
    }

  /*   public function destroy($notes){
        $notes->delete($notes);
        return to_route('notes.show')->with('notes.delete');
    } */

   /*  public function destroy(Note $notes){
        if (Auth::user()->id = $notes->user->id || Auth::user()->is_admin) {
        $notes->favoritedBy()->detach();
        $notes->deleteOrFail();
        return redirect()->route('home')->withMessage(['type'=>'danger', 'text'=>'Anuncio eliminado']);
        } else {
            return redirect()->back()->withMessage(['type'=>'danger', 'text'=>'Acción no disponible: Un anuncio solo puede ser borrado por el creador']);
        }
    } */
}
