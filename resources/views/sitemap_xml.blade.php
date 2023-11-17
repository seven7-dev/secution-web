@php
    echo '<!--?xml version="1.0" encoding="UTF-8"?-->';
@endphp
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
        @foreach ($publicRoutes as $publicRoute)
            <url>
                <loc>{{ app('Helper')->getRouteHref($publicRoute) }}</loc>
                <changefreq>weekly</changefreq>
                <priority>{{ $publicRoute === 'home' ? '1.0' : '0.8' }}</priority>
            </url>
        @endforeach
</urlset>
