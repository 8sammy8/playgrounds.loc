@if(session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-warning" role="alert">
        {{ session('error') }}
    </div>
@endif