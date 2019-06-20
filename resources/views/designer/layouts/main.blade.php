<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset=utf-8>
    <title>{{ $title ?? config('app.name') }}</title>

    <!-- Meta data -->
{{--    <meta name="description" content="{{ $meta_desc ?? '' }}"/>--}}
{{--    <meta name="keywords" content="{{ $keywords ?? '' }}"/>--}}
<meta name="csrf-token" content="{{ csrf_token() }}">


<!-- Load css styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Fav and touch icons -->
    <link rel="shortcut icon" href="">

</head>

<body>

<!-- Categories section start -->
{{--@yield('layouts.navigation')--}}
{{--@include(config('settings.folder_designer') . '.layouts.navigation')--}}
<!-- Categories section end -->

<!-- Start content -->
@include(config('settings.folder_designer') . '.layouts.flash')

<div class="col-12 text-center" >
    @yield('content')
</div>
<!-- End content -->

<!-- Footer section start -->
<div class="footer">
{{--    <p>&copy; 2019 All Rights Reserved</p>--}}
</div>
<!-- Footer section end -->

{{--<!-- Include javascript -->--}}
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>