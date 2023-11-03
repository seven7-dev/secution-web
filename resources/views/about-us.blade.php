@extends('layouts.default')

@section('content')
    <x-hero-short />
    <x-text-image-columns />
    <x-text-image-fullwidth />
    <x-testimonials /> {{-- @todo: Needs dynmaic background white --}}
    <x-action-box headline="Phishing-Betrug im Umlauf!"
    text="Wir warnen vor Phishing-Betrug, der unter unserem Namen im Umlauf ist.<br>Beachten Sie dringend: Öffnen Sie keine verdächtigen Nachrichten." linkLabel="Mehr" linkUrl="https://www.google.de" linkExternal="true"/>
@endsection