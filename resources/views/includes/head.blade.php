<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
<meta name="description" content="{{ env('APP_DESCRIPTION') }}">

@if (request()->route() !== null)
    <title>
        {{ app('Helper')->getPageTitleByRouteName(request()->route()->getName(),true) }}
    </title>
@else
    <title>
        {{ app('Helper')->getPageTitleByRouteName(request()->route(), true) }}
    </title>
@endif

<link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">
