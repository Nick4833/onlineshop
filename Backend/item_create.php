<?php 

include 'include/header.php';
include 'dbconnect.php';

?>
<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Item Create</h1>
		<a href="item_create.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-chevron-left text-white-50 mx-1"></i>Go Back</a>
	</div>

	<div class="row">
		<div class="offset-md-2 col-md-8">
			<form action="additem.php" method="POST" enctype="multipart/form-data">
				<div class="form-group">
					<label for="name">Item Name</label>
					<input type="text" name="name" id="name" class="form-control">
				</div>
				<div class="form-group">
					<label for="photo">Item Photos</label>
					<input type="file" name="photo" id="photo" class="form-control-file" accept="image/*">
				</div>

				<ul class="nav nav-tabs" id="myTab" role="tablist">
					<li class="nav-item" role="presentation">
						<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Unit Price</a>
					</li>
					<li class="nav-item" role="presentation">
						<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Discount Price</a>
					</li>
				</ul>
				<div class="tab-content" id="myTabContent">
					<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
						<input type="number" name="price" class="form-control mt-3" placeholder="Unit Price">
					</div>
					<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
						<input type="number" name="discount" class="form-control mt-3" placeholder="Discount Price">
					</div>
				</div>
				<div class="form-group">
					<label for="brand">Brand</label>
					<select class="form-control" name="brand" id="brand">
						<option>Choose..</option>
						<?php

							$sql = "SELECT * FROM brands";
							$stmt = $pdo->prepare($sql);
							$stmt->execute();
							$brands = $stmt->fetchAll();

							foreach ($brands as $brand) {
						?>
							<option value="<?php echo $brand['id']; ?>"><?php echo $brand['name']; ?></option>
						<?php
						}
						?>
					</select>
				</div>
				<div class="form-group">
					<label for="subcategory">Sub Category</label>
					<select class="form-control" name="subcategory" id="subcategory">
						<option>Choose..</option>
						<?php

							$sql = "SELECT * FROM subcategories";
							$stmt = $pdo->prepare($sql);
							$stmt->execute();
							$subcategories = $stmt->fetchAll();

							foreach ($subcategories as $subcategories) {
						?>
							<option value="<?php echo $subcategories['id']; ?>"><?php echo $subcategories['name']; ?></option>
						<?php
						}
						?>
					</select>
				</div>
				<div class="form-group">
					<label for="description">Description</label>
					<textarea class="form-control" id="description" name="description"></textarea>
				</div>
				<input type="submit" name="save" value="Save" class="btn btn-success float-right">
			</form>
		</div>
	</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<?php 

include 'include/footer.php';

?>
