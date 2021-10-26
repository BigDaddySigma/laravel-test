@extends('layouts.app')

@section('title')TESTAPP | DELETE NOTES @endsection

@section('main')
<main>
                <div class="content">
                    <h1>Delete note</h1>
                    @include('includes.messages')
                    @if(!empty($data))
                    <b>{{ $data->note_name }}</b>
                    <p class="noteReview">{{ $data->note_text }}</p>
                    <small>Author: {{ $data->author }}&nbsp;|&nbsp;Last update: {{ $data->updated_at }}&nbsp;|&nbsp;Created at: {{ $data->created_at }}</small>
                    <br>
                    <br>
                    <p class="middleLinkBox">
                        <b>Do you want to delete this note?</b>
                        <a href="{{ route('deleteNote', $data->id) }}">Yes, delete</a>
                        <a href="/deletenote">No, cancel</a>
                    </p>
                    @else
                    <form action="{{ route('findNoteByIdForDelete') }}" method="post">
                        @csrf
                        
                        <input type="text" name="id" id="id" placeholder="ENTER NOTE ID" />
                        <button type="submit" id="submit" name="submit">DELETE</button>
                    </form>
                    @endif
                </div>
                @include('includes.aside')
            </main>
@endsection
