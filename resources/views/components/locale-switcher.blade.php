@if (!empty(request()->route() !== null))
    <div class="switcher-wrapper language-switcher">
        <div class="locale_changer">
            <div class="locale-icon">
                <i class="fa fa-cog fa-2x"></i>
            </div>
            <div class="form_holder">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="predefined_styles">
                            <div class="skin-theme-switcher">
                                @foreach (config('app.available_locales') as $availableLocale)
                                    @if (app()->getLocale() !== $availableLocale)
                                        <a
                                            href="{{ app('Helper')->getRouteHref(request()->route()->getName(),$availableLocale) }}">
                                            <img src="{{ asset('images/icons/flag-' . $availableLocale . '.svg') }}"
                                                alt="{{ strtoupper($availableLocale) }}">
                                        </a>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
