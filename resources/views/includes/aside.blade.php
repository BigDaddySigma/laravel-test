@section('aside')
@show
                <aside>
                    <h2>MENU</h2>
                    <nav>
                        <ul>
                            <li><a href="{{ route('home') }}">HOME</a></li>
                            <li><a href="{{ route('review') }}">REVIEW</a></li>
                            <li><a href="{{ route('addnote') }}">ADD NOTES</a></li>
                            <li><a href="{{ route('editnote') }}">EDIT NOTES</a></li>
                            <li><a href="{{ route('deletenote') }}">DELETE NOTES</a></li>
                        </ul>
                    </nav>
                </aside>
