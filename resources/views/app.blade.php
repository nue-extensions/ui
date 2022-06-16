<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>@yield('title') :: {{ config('ui.name') }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="shortcut icon" href="{{ asset('favicon.png') }}">

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&amp;display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.btekno.id/templates/v2/css/vendor.min.css">
    <link rel="stylesheet" href="https://cdn.btekno.id/templates/v2/css/theme.min.css">
    <link rel="preload" href="https://cdn.btekno.id/templates/v2/css/theme.min.css" data-hs-appearance="default" as="style">
    <link rel="preload" href="https://cdn.btekno.id/templates/v2/css/theme-dark.min.css" data-hs-appearance="dark" as="style">

    <style>
        /* theme.min.css */
        .nav-icon {
            font-size: 20px;
        }
    </style>
    <style data-hs-appearance-onload-styles>
        *{transition:unset!important}
        body{opacity:0}
    </style>

    <script>
        window.hs_config = {
            "themeAppearance": {}
        }
    </script>

    @yield('css')
</head>

<body class="has-navbar-vertical-aside navbar-vertical-aside-show-xl">
    <script src="https://cdn.btekno.id/templates/v2/js/hs.theme-appearance.js"></script>
    <script src="https://cdn.btekno.id/templates/v2/vendor/hs-navbar-vertical-aside/dist/hs-navbar-vertical-aside-mini-cache.js"></script>

    @include('ui::partials.header')
    @include('ui::partials.aside')

    <main id="content" role="main" class="main bg-light min-vh-100">
        @yield('content')
    </main>

    <script src="https://cdn.btekno.id/templates/v2/js/vendor.min.js"></script>
    <script src="https://cdn.btekno.id/templates/v2/js/theme.min.js"></script>
    <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
    <script>
        (function() {
            window.onload = function () {
                new HSSideNav('.js-navbar-vertical-aside').init()
                HSBsDropdown.init()
            }

            const $dropdownBtn = document.getElementById('selectThemeDropdown')
            const $variants = document.querySelectorAll(`[aria-labelledby="selectThemeDropdown"] [data-icon]`)

            const setActiveStyle = function () {
                $variants.forEach($item => {
                    if ($item.getAttribute('data-value') === HSThemeAppearance.getOriginalAppearance()) {
                        $dropdownBtn.innerHTML = `<i class="${$item.getAttribute('data-icon')}" />`
                        return $item.classList.add('active')
                    }

                    $item.classList.remove('active')
                })
            }

            $variants.forEach(function ($item) {
                $item.addEventListener('click', function () {
                    HSThemeAppearance.setAppearance($item.getAttribute('data-value'))
                })
            })

            setActiveStyle()

            window.addEventListener('on-hs-appearance-change', function () {
                setActiveStyle()
            })
        })()
    </script>
    
    @yield('js')
</body>
</html>