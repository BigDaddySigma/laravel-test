<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\noteslist;

class getnotesController extends Controller {
    
    public function getNotesOrdered($type, $mode = null){
        $notes = new noteslist;
        if($mode=='asc' || $mode == 'desc'){
            switch ($type) {
                case 'id':
                    return view('review', ['data' => $notes->orderBy('id', $mode)->get()]);
                    break;
                case 'author':
                    return view('review', ['data' => $notes->orderBy('author', $mode)->get()]);
                    break;
                case 'dupdate':
                    return view('review', ['data' => $notes->orderBy('updated_at', $mode)->get()]);
                    break;
                case 'dadd':
                    return view('review', ['data' => $notes->orderBy('created_at', $mode)->get()]);
                    break;
                default: return view('review');
            }
        } else {
            switch ($type) {
                case 'id':
                    return view('review', ['data' => $notes->orderBy('id', 'asc')->get()]);
                    break;
                case 'author':
                    return view('review', ['data' => $notes->orderBy('author', 'asc')->get()]);
                    break;
                case 'dupdate':
                    return view('review', ['data' => $notes->orderBy('updated_at', 'asc')->get()]);
                    break;
                case 'dadd':
                    return view('review', ['data' => $notes->orderBy('created_at', 'asc')->get()]);
                    break;
                default: return view('review');
            }
        }
    }

    public function getNotes($id = null){
        $notes = new noteslist;
        if($id == null){
            return view('review', ['data' => $notes::all()]);
        } else {
            if(!$notes->find($id)){
                return redirect('/review')->with('error', 'Note does not exist!');
            } else {
                return view('note', ['data' => $notes::find($id)]);
            }
        }
    }

}
