<DOCTYPE !HTML>
<html>
<head>
	<meta charset = "UTF-8">
	<link rel = "stylesheet" >
	<link rel="stylesheet"
	href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" 
	integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

	
	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" 
	crossorigin="anonymous"></script>
	
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity=
	"sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" 
	crossorigin="anonymous"></script>
	
	<title>e-comm</title>
</head>
<body>
	<?php echo View ::make('layouts.header') ?>
	@yield('content')
	<?php echo View ::make('layouts.footer') ?>

</body>
<style>
	.custom-login{
		height: 500px;
		padding-top: 100px; 
		
	}
</style>
</html>