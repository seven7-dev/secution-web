@extends('layouts.default')

@section('content')
    <x-hero-slider />
    <x-action-box headline="Phishing-Betrug im Umlauf!"
        text="Wir warnen vor Phishing-Betrug, der unter unserem Namen im Umlauf ist.<br>Beachten Sie dringend: Öffnen Sie keine verdächtigen Nachrichten."
        backgroundColor="red" cssClasses="center" />
    <x-our-services />
    <x-cta-banner />
    <x-latest-works />
    <x-prices />
    <x-testimonials />
    <x-video-cta />
    <x-contact-us />
@endsection
