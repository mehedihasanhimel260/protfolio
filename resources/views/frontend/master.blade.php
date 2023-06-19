@include('frontend.inc.style')

<body id="page-top">

  <!--/ Nav Star /-->
  @include("frontend.inc.nav")
  <!--/ Nav End /-->

  @yield('content')

  @include('frontend.inc.footer')
</section>
<!--/ Section Contact-footer End /-->

@include('frontend.inc.footerlink')
