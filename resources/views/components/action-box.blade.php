<section class="action-box theme-bg full-width">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 position-relative">
                <div class="action-box-text">
                    @if (!empty($headline))
                        <h3><strong>{{ $headline }}</strong></h3>
                    @endif
                    @if (!empty($text))
                        <p>{!! $text !!}</p>
                    @endif
                </div>
                @if (!empty($linkLabel) && !empty($linkUrl))
                    <div class="action-box-button">
                        <a class="button button-border white" href="{{ $linkUrl }}"
                            @if ($linkExternal) target="_blank" @endif>{{ $linkLabel }}
                            <i class="fa fa-hand-o-right"></i>
                        </a>
                    </div>
                @endif
            </div>
        </div>
    </div>
</section>
