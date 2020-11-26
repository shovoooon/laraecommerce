<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    @include('partials.styles')

    <title>Laravel Ecommerce</title>
</head>
<body>

<div class="wrapper">
    <div class="container">

        @include('partials.nav')

        @yield('content')


    </div>

    @include('partials.footer')

</div>

@include('partials.scripts')

</body>
</html>
