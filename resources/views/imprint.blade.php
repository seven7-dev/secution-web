@extends('layouts.default')

@section('content')
    <x-hero-short />
    <x-content />
    <x-action-box headline="Lorem ipsum dolor sit amet"
    text="Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonu." linkLabel="Mehr" linkUrl="{{ route('home') }}" linkExternal="true" backgroundColor="red"/>
@endsection
