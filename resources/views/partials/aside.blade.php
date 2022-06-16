<aside class="js-navbar-vertical-aside navbar navbar-vertical-aside navbar-vertical navbar-vertical-fixed navbar-expand-xl navbar-bordered bg-white  ">
    <div class="navbar-vertical-container">
        <div class="navbar-vertical-footer-offset">
            <a class="navbar-brand" href="/" aria-label="UI">
                <img class="navbar-brand-logo" src="{{ config('ui.brand.logo.default.light') }}" alt="Logo" data-hs-theme-appearance="default">
                <img class="navbar-brand-logo" src="{{ config('ui.brand.logo.default.dark') }}" alt="Logo" data-hs-theme-appearance="dark">
                <img class="navbar-brand-logo-mini" src="{{ config('ui.brand.logo.mini.light') }}" alt="Logo" data-hs-theme-appearance="default">
                <img class="navbar-brand-logo-mini" src="{{ config('ui.brand.logo.mini.dark') }}" alt="Logo" data-hs-theme-appearance="dark">
            </a>
            <button type="button" class="js-navbar-vertical-aside-toggle-invoker navbar-aside-toggler">
                <i class="bi-arrow-bar-left navbar-toggler-short-align" data-bs-template='<div class="tooltip d-none d-md-block" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>' data-bs-toggle="tooltip" data-bs-placement="right" title="Collapse"></i>
                <i class="bi-arrow-bar-right navbar-toggler-full-align" data-bs-template='<div class="tooltip d-none d-md-block" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>' data-bs-toggle="tooltip" data-bs-placement="right" title="Expand"></i>
            </button>

            @include('vendor.nue.menu.sidebar')
        </div>
    </div>
</aside>