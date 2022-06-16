<header id="header" class="navbar navbar-expand-lg navbar-fixed navbar-height navbar-container navbar-bordered bg-white">
    <div class="navbar-nav-wrap">
        <a class="navbar-brand" href="/" aria-label="UI">
            <img class="navbar-brand-logo" src="{{ config('ui.brand.logo.default.light') }}" alt="Logo" data-hs-theme-appearance="default">
            <img class="navbar-brand-logo" src="{{ config('ui.brand.logo.default.dark') }}" alt="Logo" data-hs-theme-appearance="dark">
            <img class="navbar-brand-logo-mini" src="{{ config('ui.brand.logo.mini.light') }}" alt="Logo" data-hs-theme-appearance="default">
            <img class="navbar-brand-logo-mini" src="{{ config('ui.brand.logo.mini.dark') }}" alt="Logo" data-hs-theme-appearance="dark">
        </a>

        <div class="navbar-nav-wrap-content-start">
            <button type="button" class="js-navbar-vertical-aside-toggle-invoker navbar-aside-toggler">
                <i class="bi-arrow-bar-left navbar-toggler-short-align" data-bs-template='<div class="tooltip d-none d-md-block" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>' data-bs-toggle="tooltip" data-bs-placement="right" title="Collapse"></i>
                <i class="bi-arrow-bar-right navbar-toggler-full-align" data-bs-template='<div class="tooltip d-none d-md-block" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>' data-bs-toggle="tooltip" data-bs-placement="right" title="Expand"></i>
            </button>
        </div>

        <div class="navbar-nav-wrap-content-end">
            @include('vendor.nue.menu.dropdown')
        </div>
    </div>
</header>