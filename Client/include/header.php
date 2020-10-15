<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Fashion Shop</title>
	<link rel="stylesheet" type="text/css" href="resources/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="resources/mdb/css/mdb.min.css">
	<link rel="stylesheet" type="text/css" href="resources/custom/css/style.css">
	<script type="text/javascript" src="resources/bootstrap/js/jquery.min.js"></script>
	<script type="text/javascript" src="resources/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script type="text/javascript" src="resources/mdb/js/mdb.min.js"></script>
</head>
<body>
	<!--Navbar-->
	<nav class="navbar sticky-top navbar-expand-lg navbar-light bg-white">
		<!-- Navbar brand -->
		<a class="navbar-brand" href="#">Fashion Shop</a>

		<!-- Collapse button -->
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
		aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>

	<!-- Collapsible content -->
	<div class="collapse navbar-collapse text-center" id="basicExampleNav">

		<!-- Links -->
		<ul class="navbar-nav ml-auto">
			<li class="nav-item px-1">
				<a class="nav-link" href="index.php">Home
				</a>
			</li>
			<li class="nav-item px-1">
				<a class="nav-link" href="product.php">Products</a>
			</li>
			<li class="nav-item px-1 dropdown">
				<a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
				aria-haspopup="true" aria-expanded="false">Categories</a>
				<div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
					<a class="dropdown-item" href="shirt.php">Men's Shirts</a>
					<a class="dropdown-item" href="watch.php">Men's Watches</a>
					<a class="dropdown-item" href="shoe.php">Men's Shoes</a>
					<a class="dropdown-item" href="health.php">Health & Beauty</a>
					<a class="dropdown-item" href="sport.php">Sports & Outdoor</a>
				</div>
			</li>
			<li class="nav-item px-1">
				<a class="nav-link" href="about.php">About</a>
			</li>
			<li class="nav-item px-1">
				<a class="nav-link" href="contact.php">Contact</a>
			</li>

		</ul>
		<!-- Links -->

		<form class="form-inline text-center">
			<div class="md-form my-0 col-12">
				<input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
			</div>
		</form>
	</div>
	<!-- Collapsible content -->
</nav>
<!--/.Navbar-->