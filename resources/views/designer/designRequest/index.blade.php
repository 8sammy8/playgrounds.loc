@extends(config('settings.folder_designer') . '.layouts.main')

@section('layouts.navigation')
{{--    {!! $navigation !!}--}}
@endsection

@section('content')
    @include(config('settings.folder_designer') . '.designRequest._table_requests')
@endsection

