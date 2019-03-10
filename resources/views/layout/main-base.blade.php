<!DOCTYPE html>
<html lang="en">
<head>
   @include('layout.base.head')
</head>
<body>
@include('layout.base.nav')
<main role="main">
@include('layout.base.header')
@yield('content')
</main>
@include('layout.base.footer')
@include('layout.base.footer-scripts')
</body>
</html>