<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<title> @yield('title')</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
	@include('inc.header')

	
	@if(Request::is('/'))
		@include('inc.hero')
	@endif
	<div class="container mt-5">
		<div class="row">
			<div class="col-8">
				@yield('content')
			</div>
			<div class="col-4">
				  @include('inc.aside')
			</div>
		</div>
	</div>
    
    @include('inc.footer')
</body>
</html>
