<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\noteslist;
use App\Http\Requests\findnoteRequest;

class deletenoteController extends Controller {

    public function findNote($id = null){
        if($id != null){
            $notes = new noteslist;
            return view('deletenote', ['data' => $notes->find($id)]);
        }
    }

    public function findNoteById(findnoteRequest $data){
        $notes = new noteslist;
        if(!$notes->find($data->id)){
            return redirect('/deletenote&id='.$data->id)->with('error', 'Note does not exist!');
        } else {
            return redirect('/deletenote&id='.$data->id);
        }
    }

    public function deleteNote($id){
        $note = new noteslist;
        $note->find($id)->delete();
        return redirect('review')->with('success', 'Note successfully deleted!');
    }

}
