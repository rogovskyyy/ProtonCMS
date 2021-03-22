<!doctype html>
<html lang="en">

<head>
	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Bootstrap & local styles -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<link href="{{ asset('css/admin_dashboard/admin-theme.css') }}" rel='stylesheet'>

	<!-- Favicon sizes -->
	<link rel="icon" type="image/png" sizes="192x192" href="{{ asset('content/android-chrome-192x192.png') }}">
	<link rel="icon" type="image/png" sizes="512x512" href="{{ asset('content/android-chrome-512x512.png') }}">
	<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('content/apple-icon-180x180.png') }}">
	<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('content/favicon-16x16.png') }}">
	<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('content/favicon-32x32.png') }}">

	<!-- JQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

	<!-- Awesome fonts -->
	<script src="https://kit.fontawesome.com/a5245399c2.js" crossorigin="anonymous"></script>

	<!-- Vue.js -->
	<script src="https://unpkg.com/vue@next"></script>

	<!-- Title -->
	<title>ProtonCMS Dashboard</title>
	
	<!-- Smoothe scrolling event -->
	<script>
	$(document).on("click", "a", function() {
		$([document.documentElement, document.body]).animate({
			scrollTop: $($(this).attr('href')).offset().top - 25
		}, 200);
	});
	</script>

</head>

<body>