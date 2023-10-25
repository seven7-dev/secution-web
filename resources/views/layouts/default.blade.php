<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    @include('includes.head')
    @include('includes.styles')
</head>
<body>

@include('includes.noscript')

@include('partials.header')

<main>
    @yield('content')
</main>

@include('partials.footer')

@include('includes.scripts')

{{-- @include('includes.cookies') --}}

</body>
</html>
