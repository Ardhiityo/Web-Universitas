@include('partials.head')
@include('sweetalert::alert')

<!-- NAVIGATION -->
<x-header />
<!-- END OF NAVIGATION -->

<!-- CONTENT -->
@yield('content')
<!-- END OF CONTENT -->

@include('partials.foot')
