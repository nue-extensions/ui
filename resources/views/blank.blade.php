<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>@yield('title') :: {{ config('ui.name') }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="shortcut icon" href="{{ config('ui.brand.favicon') }}">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&amp;display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.btekno.id/templates/v2/css/vendor.min.css">
    <link rel="stylesheet" href="https://cdn.btekno.id/templates/v2/css/theme.min.css">
    <link rel="preload" href="https://cdn.btekno.id/templates/v2/css/theme.min.css" data-hs-appearance="default" as="style">
    <link rel="preload" href="https://cdn.btekno.id/templates/v2/css/theme-dark.min.css" data-hs-appearance="dark" as="style">
    <style data-hs-appearance-onload-styles>
        *{transition:unset!important}
        body{opacity:0}
    </style>
    <script>
        window.hs_config = {
            "themeAppearance":{
                "layoutSkin": "default"
            }
        }
    </script>

    @yield('css')
</head>

<body class="d-flex align-items-center min-h-100">
    <script src="https://cdn.btekno.id/templates/v2/js/hs.theme-appearance.js"></script>

    @yield('content')

    <script src="https://cdn.btekno.id/templates/v2/js/vendor.min.js"></script>
    <script src="https://cdn.btekno.id/templates/v2/js/theme.min.js"></script>
    <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>

    <script>
        (function() {
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