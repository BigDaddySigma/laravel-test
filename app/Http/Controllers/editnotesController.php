<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\noteslist;
use App\Http\Requests\findnoteRequest;
use App\Http\Requests\editnoteRequest;

class editnotesController extends Controller {

    public function findNote($id = null){
        if($id != null){
            $notes = new noteslist;
            return view('editnote', ['data' => $notes->find($id)]);
        }
    }

    public function findNoteById(findnoteRequest $data){
        $notes = new noteslist;
        if(!$notes->find($data->id)){
            return redirect('/editnote&id='.$data->id)->with('error', 'Note does not exist!');
        } else {
            return redirect('/editnote&id='.$data->id);
        }
    }

    public function editNote($id, editnoteRequest $data){
        $note = noteslist::find($id);
        $note->note_name = $data->input('name');
        $note->note_text = $data->input('text');
        $note->save();
        return redirect()->route('review')->with('success','Note updated successfully!');
    }

}
