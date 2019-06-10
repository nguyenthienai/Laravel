<!DOCTYPE HTML>
<html>
@include('partials.partial')
@yield('title')
<body>
	@include('partials.header')
	@yield('banner')
	@yield('content')
	@include('partials.footer')
</body>
</html>		