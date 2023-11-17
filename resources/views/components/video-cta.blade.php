@if (!empty($videos['mp4'] && !empty($videos['ogv'] && !empty($videos['ogv']))))
    <div class="parallax bg-overlay-black-70 page-section-ptb jarallax" data-speed="0.6"
        data-video-src="mp4:{{ asset($videos['mp4']) }},ogv:{{ asset($videos['ogv']) }},webm:{{ asset($videos['webm']) }}">
        <div class="container">
            <div class="row pos-r mt-20">
                <div class="col-md-12">
                    @if (!empty($headline) || !empty($subheadline))
                        <div class="section-title text-center">
                            @if (!empty($headline))
                                <h6 class="text-white">{{ $headline }}</h6>
                            @endif
                            @if (!empty($subheadline))
                                <h2 class="text-white">{{ $subheadline }}</h2>
                            @endif
                        </div>
                    @endif
                    @if (!empty($linkUrl && $linkLabel))
                        <div class="text-center">
                            <a target="blank" href="{{ $linkUrl }}" class="button button-border-white"
                                @if (!empty($linkExternal)) target="_blank" @endif>
                                <span>{{ $linkLabel }}</span>
                            </a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
        <div style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; overflow: hidden; z-index: -100;"
            id="jarallax-container-0">
            <div
                style="background-position: 50% 50%; background-size: cover; background-repeat: no-repeat; background-image: none; position: fixed; top: 0px; left: 0px; width: 2560px; height: 564.1px; overflow: hidden; pointer-events: none; transform-style: preserve-3d; backface-visibility: hidden; will-change: transform, opacity; margin-top: 177.45px; transform: translate3d(0px, 1257.24px, 0px); display: none;">
            </div><video loop="" playsinline="" webkit-playsinline="" id="VideoWorker-0"
                style="position: fixed; inset: 0px; width: 2560px; height: 1440px; max-width: none; max-height: none; margin: -550px 0px 0px; z-index: -1; transform: translate3d(0px, 38.34px, 0px);">
                <source src="{{ asset($videos['mp4']) }}" type="video/mp4">
                <source src="{{ asset($videos['ogv']) }}" type="video/ogg">
                <source src="{{ asset($videos['webm']) }}" type="video/webm">
            </video>
        </div>
    </div>
@endif
