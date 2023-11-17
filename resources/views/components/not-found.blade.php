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
                @if (!empty($text) || !empty($linkLeftLabel) || !empty($linkRightLabel))
                    <div class="error-info">
                        @if (!empty($text))
                            <p class="mb-50">{{ $text }}</p>
                        @endif
                        @if (!empty($linkLeftLabel))
                            <a class="button xs-mb-10"
                                href="{{ route('home', app()->getLocale()) }}">{{ $linkLeftLabel }}</a>
                        @endif
                        @if (!empty($linkRightLabel))
                            <a class="button" href="#">{{ $linkRightLabel }}</a>
                        @endif
                    </div>
                @endif
            </div>
        </div>
    </div>
</section>