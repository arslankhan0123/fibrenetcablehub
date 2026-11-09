<header id="header" class="header d-flex align-items-center fixed-top">
  <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

    <a href="{{route('welcome')}}" class="logo d-flex align-items-center">
      <img src="{{ asset('landingPage/assets/img/fibernetcablehub-logo.svg') }}" class="brand-logo" alt="FibreNetCableHub — Internet, TV and connectivity">
    </a>

    <!-- Centered Nav -->
    <nav id="navmenu" class="navmenu mx-auto">
      <ul class="justify-content-center mb-0">
        <li><a href="{{route('welcome')}}#hero" class="active">Home</a></li>
        <li><a href="{{route('welcome')}}#about">About</a></li>
        <li><a href="{{route('welcome')}}#services">Services</a></li>
        <li><a href="{{ route('payBill') }}" class="{{ request()->routeIs('payBill') ? 'active' : '' }}">Pay Bill</a></li>
        <li><a href="{{route('welcome')}}#contact">Contact</a></li>
      </ul>
      <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
    </nav>

    <!-- Right Side Button -->
    <a class="btn-getstarted" href="tel:{{ config('site.contact.phone_link') }}">{{ config('site.contact.phone_display') }}</a>

  </div>
</header>
