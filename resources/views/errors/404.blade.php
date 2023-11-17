@extends('layouts.default')

@section('content')
    <x-hero-short />
    <x-not-found :headline="__('content.pages.404.elements.not_found.headline')" :subheadline="__('content.pages.404.elements.not_found.subheadline')" :text="__('content.pages.404.elements.not_found.text')" :backgroundTextHeadline="__('content.pages.404.elements.not_found.background.text.headline')" :backgroundTextSubheadline="__('content.pages.404.elements.not_found.background.text.subheadline')" :linkUrl="__('content.pages.404.elements.not_found.link.url')"
        :linkLabel="__('content.pages.404.elements.not_found.link.label')" />
@endsection
