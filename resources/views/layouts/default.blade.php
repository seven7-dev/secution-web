<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    @include('includes.head')
    {{-- @include('includes.styles') --}}
</head>
<body>

    <div class="wrapper">
        @include('includes.noscript')

        @include('partials.preloader')

        @include('partials.header')

        <main>
            @yield('content')
        </main>

        @include('partials.footer')
    </div>

    @include('includes.scripts')

    {{-- @include('includes.cookies') --}}

</body>

</html>
