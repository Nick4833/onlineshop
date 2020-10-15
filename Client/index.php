<?php
	
	include 'include/header.php';
	include 'dbconnect.php';

?>

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(45).jpg"
			alt="First slide">
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(46).jpg"
			alt="Second slide">
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(47).jpg"
			alt="Third slide">
		</div>
	</div>
	<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
</div>
<div class="container">
	<h2 class="text-center text-muted font-weight-bold m-3">NEW ARRIVAL</h2>
		<div class="row">

		<?php
		$sql="SELECT * FROM items ORDER BY id DESC LIMIT 8";
		$stmt=$pdo->prepare($sql);
		$stmt->execute();
		$items=$stmt->fetchAll();

		foreach ($items as $item) {
			?>
			<div class="col-6 col-md-3 py-1">
				<!-- Card -->
				<div class="card text-center card-custom" style="">

					<!-- Card image -->
					<img class="card-img-top" src="../Backend/<?php echo $item['photo']; ?>" alt="Card image cap">

					<!-- Card content -->
					<div class="card-body">

						<!-- Title -->
						<p class="card-title"><a>Name: <?php echo $item['name']; ?></a></p>
						<!-- Text -->
						<p class="card-text">Price: <?php echo $item['discount']; ?> MMK</p>
						<p class="card-text"><s><?php echo $item['price']; ?> MMK</s></p>
						<!-- Button -->
						<a href="#" class="btn btn-outline-dark btn-block">Add to Cart</a>

					</div>

				</div>
				<!-- Card -->
			</div>

		<?php } ?>
		<div class="col-12 text-center">
			<a href="product.php" class="btn btn-outline-dark">View More...</a>
		</div>
	</div>
</div>

<div class="container mt-5">
	<div class="row">
		<div class="col-12 col-md-6">
			<img src="resources/custom/imgs/p1.jpg" class="img-fluid">
		</div>
		<div class="col-12 col-md-6 mt-5">
			<h3>About Our Website</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>
	</div>
</div>
<?php
	
	include 'include/footer.php';

?>
</body>
</html>