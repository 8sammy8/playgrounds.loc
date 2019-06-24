<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset=utf-8>
    <title>{{ config('app.name')  }}
        @isset($pageHeader) {{ $pageHeader ?? ': '. $pageHeader}} @endisset
    </title>

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    @stack('css')
    <link rel="shortcut icon" href="">

</head>

<body class="hold-transition skin-blue sidebar-mini">

@include(config('settings.folder_designer') . '.layouts.dashboard')

<script src="{{ asset('js/app.js') }}"></script>
@stack('scripts')

</body>
</html>