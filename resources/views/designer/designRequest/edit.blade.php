@extends(config('settings.folder_designer') . '.layouts.main')

@section('content')
    @include(config('settings.folder_designer') . '.designRequest._edit_form')
@endsection
