@extends('layouts.default')

@section('content')
    <x-hero-short />
    <x-text-image-columns />
    <x-text-image-fullwidth />
    <x-testimonials /> {{-- @todo: Needs dynmaic background white --}}
    <x-action-box headline="Lorem ipsum dolor sit amet"
    text="Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonu." linkLabel="Mehr" linkUrl="{{ route('home') }}" linkExternal="true" backgroundColor="red"/>
@endsection
