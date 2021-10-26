@if($errors->any())<div class="errorCode">
    @foreach($errors->all() as $error)
                    <p>{{ $error }}</p>
    @endforeach
                </div>
@endif
@if(session('success'))<div class="successCode">
                        <p>{{ session('success') }}</p>
                </div>
@endif
@if(session('error'))<div class="errorCode">
                        <p>{{ session('error') }}</p>
                </div>
@endif