@extends('layouts.app')

@section('title')TESTAPP | REVIEW @endsection

@section('main')
<main>
                <div class="content">
                    <h1>Review</h1>
                    @include('includes.messages')
        
                    <table class="review">
                        <tbody>
                            <tr>
                                <th><a href="/review&order=id&mode=asc">Note ID</a></th>
                                <th><a href="/review&order=author&mode=asc">Author</a></th>
                                <th>Name</th>
                                <th>Note</th>
                                <th><a href="/review&order=dupdate&mode=asc">Date update</a></th>
                                <th><a href="/review&order=dadd&mode=asc">Date add</a></th>
                            </tr>
                            @foreach($data as $value)<tr>
                                <td class="func"><a href="{{ route('reviewById', $value->id) }}"><span class="info" title="open note"></span></a><a href="{{ route('findNote', $value->id) }}"><span class="edit" title="edit note"></span></a><a href="{{ route('findNoteForDelete', $value->id) }}"><span class="delete" title="delete note"></span></a>{{ $value->id }}</td><td>{{ $value->author }}</td><td>{{ $value->note_name }}</td><td>{{ $value->note_text }}</td><td>{{ $value->updated_at }}</td><td>{{ $value->created_at }}</td>
                            </tr>
                        @endforeach</tbody>
                    </table>
                </div>
                @include('includes.aside')
            </main>
@endsection
