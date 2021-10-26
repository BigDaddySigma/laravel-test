@extends('layouts.app')

@section('title')TESTAPP | ADD NOTES @endsection

@section('main')
<main>
                <div class="content">
                    <h1>Add note</h1>
                    @include('includes.messages')
                    <form action="{{ route('addnotesubmit') }}" method="post">
                        @csrf
                        
                        <input type="text" name="author" id="author" placeholder="YOUR NAME" />
                        <input type="text" name="name" id="name" placeholder="NOTE NAME" />
                        <textarea name="text" id="text" rows="6" placeholder="TEXT"></textarea>
                        <button type="submit" id="submit" name="submit">ADD</button>
                    </form>
                </div>
                @include('includes.aside')
            </main>
@endsection
