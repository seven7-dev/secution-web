<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    @include('includes.head')
    @include('includes.styles')
</head>
<body>

@include('includes.noscript')

{{--<div id="pre-loader">--}}
{{--    <img src="images/pre-loader/loader-01.svg" alt="">--}}
{{--</div>--}}

@include('partials.header')

<main>
    <div class="wrapper">
        @yield('content')
    </div>
</main>

@include('partials.footer')

@include('includes.scripts')

{{-- @include('includes.cookies') --}}

</body>
</html>
