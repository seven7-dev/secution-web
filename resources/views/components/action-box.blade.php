<section class="page-section-ptb theme-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                @if(!empty($headline))
                    <h1 class="text-white fw-2">{{ $headline }}</h1>
                @endif
                @if(!empty($text))
                    <p class="text-white mt-20">{!! $text !!}</p>
                @endif
                @if(!empty($linkLabel) && !empty($linkUrl))
                    <div class="mt-30">
                        <a
                            class="button icon white button-border xs-mt-10"
                            href="{{ $linkUrl }}"
                            @if($linkExternal)
                                target="_blank"
                            @endif
                        >{{ $linkLabel }}
                            <i class="fa fa-hand-o-right"></i>
                        </a>
                    </div>
                @endif
            </div>
        </div>
    </div>
</section>
