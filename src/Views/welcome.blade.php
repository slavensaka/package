<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>My package</title>
	<link rel="stylesheet" href="{{ asset('vendor/mypackage/css/test.css') }}">

</head>
<body>
	<h1>{{ $say }}</h1>
	<div id="hideMe">Now you see me</div>
</body>
</html>

<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="{{ asset('vendor/mypackage/js/test.js') }}" type="text/javascript" charset="utf-8" ></script>