<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    @include('includes.head')
    @include('includes.styles')
</head>

<body>

    <div class="wrapper">
        @include('includes.noscript')

        @include('partials.preloader')

        <x-action-box headline="Phishing-Betrug im Umlauf!"
            text="Wir warnen vor Phishing-Betrug, der unter unserem Namen im Umlauf ist.<br>Beachten Sie dringend: Öffnen Sie keine verdächtigen Nachrichten."
            backgroundColor="red" cssClasses="center phishing-alert" />

        @include('partials.header')

        <x-locale-switcher />

        <main>
            @yield('content')
        </main>

        @include('partials.footer')
    </div>

    @include('includes.scripts')

    {{-- @include('includes.cookies') --}}

</body>

</html>
