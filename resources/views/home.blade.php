@extends('layouts.default')

@section('content')
    <x-hero-slider />
    <x-our-services />
    <x-cta-banner />
    <x-latest-works />
    <x-prices />
    <x-testimonials />
    <x-video-cta :headline="__('content.pages.home.elements.video_cta.headline')" :subheadline="__('content.pages.home.elements.video_cta.subheadline')" :linkUrl="__('content.pages.home.elements.video_cta.link.url')" :linkLabel="__('content.pages.home.elements.video_cta.link.label')"
    :videos="[
        'mp4' => __('content.pages.home.elements.video_cta.videos.mp4'),
        'ogv' => __('content.pages.home.elements.video_cta.videos.ogv'),
        'webm' => __('content.pages.home.elements.video_cta.videos.webm'),
    ]" />
    <x-contact-us />
@endsection
