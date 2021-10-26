<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\addnoteRequest;
use App\Models\noteslist;

class addnoteController extends Controller {

    public function addNote(addnoteRequest $data) {
        
        $note = new noteslist();
        $note->author = $data->input('author');
        $note->note_name = $data->input('name');
        $note->note_text = $data->input('text');
        $note->save();
        return redirect()->route('review')->with('success', 'Note successfully added!');

    }

}
