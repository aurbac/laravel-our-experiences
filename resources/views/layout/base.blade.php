<!DOCTYPE html>
 
<html lang="en">
<head>
   @include('layout.base.head')
</head>
<body>
@include('layout.base.nav')
<main role="main">
@yield('content')
</main>
@include('layout.base.footer')
@include('layout.base.footer-scripts')
<script type="text/javascript">
    @yield('inline-scripts')
</script>
</body>
</html>