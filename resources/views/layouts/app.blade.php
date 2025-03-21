@include('partials.header')
@include('sweetalert::alert')

<!-- NAVIGATION -->
@include('partials.nav')
<!-- END OF NAVIGATION -->

<!-- CONTENT -->
@yield('content')
<!-- END OF CONTENT -->

@yield('footer')
