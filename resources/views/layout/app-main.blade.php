<!DOCTYPE html>

<html class="loading" lang="en" data-textdirection="rtl">

 <head>

   @include('layout.partials.head')

 </head>

 <body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="">


@include('layout.partials.nav')

@include('layout.partials.header')

@yield('content')

@include('layout.partials.footer')

@include('layout.partials.footer-scripts')
@include('layout.partials.footer-fill-scripts')


 </body>

</html>
