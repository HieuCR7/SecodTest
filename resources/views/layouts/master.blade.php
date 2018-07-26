<!DOCTYPE html>
<html>
<head>
	<title>KhoaHoc-Laravel</title>
	<link rel="stylesheet" type="text/css" href="{{asset('/assets/css/style.css')}}">
</head>
<body>
	@include('layouts/header')
	<div id="content">
		<h1>Khoa Hoc</h1>
		@yield('content')
	</div>
	@include('layouts/footer')
</body>
</html>