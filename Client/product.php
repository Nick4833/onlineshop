<?php

include 'include/header.php';
include 'dbconnect.php';

?>
<div class="container mt-5">
	<h2 class="text-center text-muted font-weight-bold m-3">Our Products</h2>
	<div class="row">

		<?php
		$sql="SELECT * FROM items";
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
	</div>
</div>

<?php

include 'include/footer.php';

?>
</body>
</html>