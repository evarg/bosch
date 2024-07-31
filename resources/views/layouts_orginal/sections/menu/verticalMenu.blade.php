<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">

  <!-- ! Hide app brand if navbar-full -->
  <div class="app-brand demo">
    <a href="{{url('/')}}" class="app-brand-link">
      <span class="app-brand-logo demo me-1">
        <img src="{{asset('assets/img/fnet-logo.png')}}" class="scaleX-n1-rtl position-absolute top-0 me-4 mb-4 pb-2" width="140" alt="view sales">
        {{-- @include('_partials.macros',["height"=>20]) --}}
      </span>
      <span class="app-brand-text demo menu-text fw-semibold ms-2">{{config('variables.templateName')}}</span>
    </a>

    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
      <i class="mdi menu-toggle-icon d-xl-block align-middle mdi-20px"></i>
    </a>
  </div>

  <div class="menu-inner-shadow"></div>

  <ul class="menu-inner py-1">

    <li class="menu-item">
      <a href="javascript:void(0);" class="menu-link">
        <i class="menu-icon tf-icons mdi mdi-home-outline"></i>
        <div>Dashboards</div>
        <div class="badge bg-danget rounded-pill ms-auto">7</div>
      </a>
    </li>

    <li class="menu-header fw-medium mt-4">
      <span class="menu-header-text">Nagłówek</span>
    </li>

    <li class="menu-item">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons mdi mdi-weather-snowy"></i>
        <div>Menu rozwijane</div>
      </a>

      <ul class="menu-sub">
        <li class="menu-item">
          <a href="javascript:void(0)" class="menu-link">
            <i class="menu-icon tf-icons mdi mdi-weather-snowy"></i>
            <div>Jakaś nazwa</div>
          </a>
        </li>
    </li>
  </ul>

  @foreach ($menuData[0]->menu as $menu)

  {{-- adding active and open class if child is active --}}

  {{-- menu headers --}}
  @if (isset($menu->menuHeader))
  <li class="menu-header fw-medium mt-4">
    <span class="menu-header-text">{{ __($menu->menuHeader) }}</span>
  </li>

  @else

  {{-- active menu method --}}
  @php
  $activeClass = null;
  $currentRouteName = Route::currentRouteName();

  if ($currentRouteName === $menu->slug) {
  $activeClass = 'active';
  }
  elseif (isset($menu->submenu)) {
  if (gettype($menu->slug) === 'array') {
  foreach($menu->slug as $slug){
  if (str_contains($currentRouteName,$slug) and strpos($currentRouteName,$slug) === 0) {
  $activeClass = 'active open';
  }
  }
  }
  else{
  if (str_contains($currentRouteName,$menu->slug) and strpos($currentRouteName,$menu->slug) === 0) {
  $activeClass = 'active open';
  }
  }

  }
  @endphp

  {{-- main menu --}}
  <li class="menu-item {{$activeClass}}">
    <a href="{{ isset($menu->url) ? url($menu->url) : 'javascript:void(0);' }}" class="{{ isset($menu->submenu) ? 'menu-link menu-toggle' : 'menu-link' }}" @if (isset($menu->target) and !empty($menu->target)) target="_blank" @endif>
      @isset($menu->icon)
      <i class="{{ $menu->icon }}"></i>
      @endisset
      <div>{{ isset($menu->name) ? __($menu->name) : '' }}</div>
      @isset($menu->badge)
      <div class="badge bg-{{ $menu->badge[0] }} rounded-pill ms-auto">{{ $menu->badge[1] }}</div>

      @endisset
    </a>

    {{-- submenu --}}
    @isset($menu->submenu)
    @include('layouts.sections.menu.submenu',['menu' => $menu->submenu])
    @endisset
  </li>
  @endif
  @endforeach
  </ul>

</aside>