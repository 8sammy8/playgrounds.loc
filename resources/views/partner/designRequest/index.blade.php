@extends(config('settings.folder_partner') . '.layouts.main')

@section('layouts.navigation')
{{--    {!! $navigation !!}--}}
@endsection

@section('content')
    @include(config('settings.folder_partner') . '.designRequest._form_main_request')
@endsection

