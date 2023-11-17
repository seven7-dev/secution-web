<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
<meta name="description" content="{{ env('APP_DESCRIPTION') }}">

<title>
    {{ app('Helper')->getPageTitleByRouteName(request()->route() !== null? request()->route()->getName(): __('content.pages.404.title'),true) }}
</title>

<link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">
