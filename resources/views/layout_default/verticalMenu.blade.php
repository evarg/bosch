<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <!-- ! Hide app brand if navbar-full -->
    <div class="app-brand demo">
        <a href="{{ url('/') }}" class="app-brand-link">
            <span class="app-brand-logo demo me-1">
                <img src="{{ asset('assets/img/fnet-logo.png') }}"
                    class="scaleX-n1-rtl position-absolute top-0 me-4 mb-4 pb-2" width="140" alt="view sales">
                {{-- @include('_partials.macros',["height"=>20]) --}}
            </span>
            <span class="app-brand-text demo menu-text fw-semibold ms-2">{{ config('variables.templateName') }}</span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
            <i class="mdi menu-toggle-icon d-xl-block align-middle mdi-20px"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">

        <li class="menu-item">
            <a href="{{ route('dashboard') }}" class="menu-link">
                <i class="menu-icon tf-icons mdi mdi-home-outline"></i>
                <div>Dashboard</div>
                <div class="badge bg-danget rounded-pill ms-auto">7</div>
            </a>
        </li>

        <li class="menu-item">
            <a href="{{ route('instalation.index') }}" class="menu-link">
                <i class="menu-icon tf-icons mdi mdi-weather-snowy"></i>
                <div>Instalacje</div>
            </a>
        </li>

        <li class="menu-item">
            <a href="{{ route('events_upload.index') }}" class="menu-link">
                <i class="menu-icon tf-icons mdi mdi-weather-snowy"></i>
                <div>Upload zdarzeń</div>
            </a>
        </li>

        <li class="menu-header fw-medium mt-4">
            <span class="menu-header-text">Schrack</span>
        </li>

        <li class="menu-item">
            <a href="{{ route('Secolog.index') }}" class="menu-link">
                <i class="menu-icon tf-icons mdi mdi-weather-snowy"></i>
                <div>Secolog</div>
            </a>
        </li>

        <li class="menu-header fw-medium mt-4">
            <span class="menu-header-text">Raw data</span>
        </li>

        <li class="menu-item open">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons mdi mdi-weather-snowy"></i>
                <div>Bosch FPA5000</div>
            </a>

            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ route('BoschFPA5000.CONFIG_NETWORK.index') }}" class="menu-link">
                        <i class="menu-icon tf-icons mdi mdi-weather-snowy"></i>
                        <div>CONFIG_NETWORK</div>
                    </a>
                </li>

                <li class="menu-item">
                    <a href="{{ route('BoschFPA5000.NODE.index') }}" class="menu-link">
                        <i class="menu-icon tf-icons mdi mdi-weather-snowy"></i>
                        <div>NODE</div>
                    </a>
                </li>

                <li class="menu-item">
                    <a href="{{ route('BoschFPA5000.MODULE.index') }}" class="menu-link">
                        <i class="menu-icon tf-icons mdi mdi-weather-snowy"></i>
                        <div>MODULE</div>
                    </a>
                </li>
        </li>
    </ul>

</aside>
