@include('partials.header')
@include('sweetalert::alert')

<!-- NAVIGATION -->
<x-header />
<!-- END OF NAVIGATION -->

<!-- CONTENT -->
@yield('content')
<!-- END OF CONTENT -->

@yield('footer')
