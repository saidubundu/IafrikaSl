<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <title>@yield('page_title', setting('site.title') . " - " . setting('site.description'))</title>
    <?php $admin_favicon = Voyager::setting('site.logo', ''); ?>
    @if($admin_favicon == '')
        <link rel="shortcut icon" href="{{ voyager_asset('images/logo-icon.png') }}" type="image/png">
    @else
        <link rel="shortcut icon" href="{{ Voyager::image($admin_favicon) }}" type="image/png">
    @endif

    <link href="{{ asset('/css/app.css') }}" rel="stylesheet" />
    <link href="{{ asset('/css/front.css') }}" rel="stylesheet" />
    <script src="{{ asset('/js/app.js') }}" defer></script>
    @routes
</head>
<body class="light">
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v8.0&appId=371574470757018&autoLogAppEvents=1" nonce="rv7sIHTl"></script>
@inertia
<script src="{{ asset('/js/front.js') }}" defer></script>
<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5fa800dcdc1bea5a"></script>


</body>
</html>
