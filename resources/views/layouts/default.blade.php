<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    @include('includes.head')
    @include('includes.styles')
</head>
<body>

@include('includes.noscript')

@include('partials.preloader')

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
