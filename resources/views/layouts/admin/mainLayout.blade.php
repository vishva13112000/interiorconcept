<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
  <!-- BEGIN: Head-->
  @include('includes.admin.head')
  @yield('styles')
  <!-- END: Head-->
<body class="vertical-layout vertical-compact-menu material-vertical-layout material-layout 2-columns   fixed-navbar" data-open="click" data-menu="vertical-compact-menu" data-col="2-columns">
  <!-- BEGIN: Header-->
  @include('includes.admin.header')
  <!-- END: Header-->
  <!-- BEGIN: Main Menu-->
  @include('includes.admin.sidebar')
  <!-- END: Main Menu-->
  <!-- BEGIN: Content-->
  @yield('content')
  <!-- END: Content-->
  <div class="sidenav-overlay"></div>
  <div class="drag-target"></div>
  <!-- BEGIN: Footer-->
  @include('includes.admin.footer')
  <!-- END: Footer-->
  <!-- BEGIN: JS-->
  @include('includes.admin.script')
  @yield('scripts')
  <!-- BEGIN: JS-->
</body>
</html>
