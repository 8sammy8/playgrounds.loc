@extends(config('settings.folder_partner') . '.layouts.main')

@section('content')
    @include(config('settings.folder_partner') . '.designRequest._form_main_request')
@endsection

