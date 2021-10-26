@extends('layouts.app')

@section('title')TESTAPP | NOTE - {{$data->note_name}} @endsection

@section('main')
<main>
                <div class="content">
                    <h1>{{$data->note_name}}</h1>
                    @include('includes.messages')
                    @if(!empty($data))
                    <p class="noteReview">{{ $data->note_text }}</p>
                    <small>Author: {{ $data->author }}&nbsp;|&nbsp;Last update: {{ $data->updated_at }}&nbsp;|&nbsp;Created at: {{ $data->created_at }}</small>
                    @endif
                </div>
                @include('includes.aside')
            </main>
@endsection
