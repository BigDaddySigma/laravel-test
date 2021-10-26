@extends('layouts.app')

@section('title')TESTAPP | EDIT NOTES @endsection

@section('main')
<main>
                <div class="content">
                    <h1>Edit note</h1>
                    @include('includes.messages')
                    @if(!empty($data))
                    <b>You editing note: {{ $data->note_name }}</b>
                    <p class="noteReview">{{ $data->note_text }}</p>
                    <small>Author: {{ $data->author }}&nbsp;|&nbsp;Last update: {{ $data->updated_at }}&nbsp;|&nbsp;Created at: {{ $data->created_at }}</small>
                    <br>
                    <br>
                    <h1>Enter a new values</h1>
                    <form action="{{ route('editNote', $data->id) }}" method="post">
                        @csrf
                        
                        <input type="text" name="name" id="name" value="{{ $data->note_name }}" />
                        <textarea name="text" id="text" rows="6">{{ $data->note_text }}</textarea>
                        <button type="submit" id="submit" name="submit">EDIT</button>
                    </form>
                    @else
                    <form action="{{ route('findNoteById') }}" method="post">
                        @csrf
                        
                        <input type="text" name="id" id="id" placeholder="ENTER NOTE ID" />
                        <button type="submit" id="submit" name="submit">FIND</button>
                    </form>
                    @endif
                </div>
                @include('includes.aside')
            </main>
@endsection
