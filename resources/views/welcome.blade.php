<!doctype html>
<html lang="{{ config('app.locale') }}">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>abcjs Workshop</title>

	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

	<!-- Styles -->
	<link rel="stylesheet" type="text/css" href="/css/app.css">

</head>
<body>
<div id="app"></div>
{{-- / setting value to your CSRFglobal variables  --}}
<script>
	window.Laravel = <?php echo json_encode( [
		'csrfToken' => csrf_token(),
	] ); ?>
</script>

<script src="/js/app.js"></script>
</body>
</html>
