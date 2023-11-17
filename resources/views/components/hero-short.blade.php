<section class="page-title bg-overlay-black-60 jarallax" data-speed="0.6" data-img-src="{{ asset('images/bg/02.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-title-name">
                    @if (request()->route() !== null)
                        <h1>{{ app('Helper')->getPageTitleByRouteName(request()->route()->getName()) }}
                        </h1>
                        <p>{{ app('Helper')->getBreadcrumbDescriptionByRouteName(request()->route()->getName()) }}
                        </p>
                    @else
                        <h1>{{ app('Helper')->getPageTitleByRouteName(request()->route()) }}
                        </h1>
                        <p>{{ app('Helper')->getBreadcrumbDescriptionByRouteName(request()->route()) }}
                        </p>
                    @endif
                </div>
                <ul class="page-breadcrumb">
                    <li><a href="{{ app('Helper')->getRouteHref('home') }}"><i class="fa fa-home"></i>
                            {{ app('Helper')->getPageTitleByRouteName('home') }}</a> <i
                            class="fa fa-angle-double-right"></i>
                    </li>
                    @if (request()->route() !== null)
                        <li><span>{{ app('Helper')->getPageTitleByRouteName(request()->route()->getName()) }}</span>
                        </li>
                    @else
                        <li><span>{{ app('Helper')->getPageTitleByRouteName(request()->route()) }}</span>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
</section>
