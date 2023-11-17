<section class="page-section-ptb">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
                <div class="error-block text-center clearfix">
                    @if (!empty($backgroundTextHeadline) || !empty($backgroundTextSubheadline))
                        <div class="error-text">
                            @if (!empty($backgroundTextHeadline))
                                <h2>{{ $backgroundTextHeadline }}</h2>
                            @endif
                            @if (!empty($backgroundTextSubheadline))
                                <span>{{ $backgroundTextSubheadline }}</span>
                            @endif
                        </div>
                    @endif
                    @if (!empty($headline))
                        <h1 class="theme-color mb-40">{{ $headline }}</h1>
                    @endif
                    @if (!empty($subheadline))
                        <p>{{ $subheadline }}</p>
                    @endif
                </div>
                @if (!empty($text) || (!empty($linkUrl) && !empty($linkLabel)))
                    <div class="error-info">
                        @if (!empty($text))
                            <p class="mb-50">{{ $text }}</p>
                        @endif
                        @if (!empty($linkUrl) && !empty($linkLabel))
                            @if (!empty($linkExternal))
                                <a class="button"
                                    href="{{ $linkUrl }}" target="_blank">{{ $linkLabel }}</a>
                            @else
                                <a class="button"
                                    href="{{ app('Helper')->getRouteHref($linkUrl) }}">{{ $linkLabel }}</a>
                            @endif
                        @endif
                    </div>
                @endif
            </div>
        </div>
    </div>
</section>
