<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Blog Listing</title>
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
	<link rel="stylesheet" href="{{ asset('css/summernote.css') }}">
	<script src="{{ asset('js/app.js') }}"></script>
	<script src="{{ asset('js/summernote.min.js') }}"></script>
	<script src="{{ asset('js/custom.js') }}"></script>
	<script src="{{ asset('font/summernote.ttf') }}"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				@yield("content")
			</div>
		</div>
	</div>

</body>
</html>