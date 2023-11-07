@php
    echo '<!--?xml version="1.0" encoding="UTF-8"?-->';
@endphp
@php
    $publicRoutes = ['home', 'about-us', 'services', 'testimonials', 'contact', 'data-privacy', 'imprint', 'search', 'sitemap'];
@endphp
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
        @foreach ($publicRoutes as $publicRoute)
            <url>
                <loc>{{ route($publicRoute) }}</loc>
                <changefreq>weekly</changefreq>
                <priority>{{ $publicRoute === 'home' ? '1.0' : '0.8' }}</priority>
            </url>
        @endforeach
</urlset>
