<?php 

include 'include/header.php';
include 'dbconnect.php';

?>
<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Sub Category Create</h1>
		<a href="subcategory_list.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-chevron-left text-white-50 mx-1"></i>Go Back</a>
	</div>

	<div class="row">
		<div class="offset-md-2 col-md-8">
			<form action="addsubcategory.php" method="POST" enctype="multipart/form-data">
				<div class="form-group">
					<label for="name">Sub Category Name</label>
					<input type="text" name="name" id="name" class="form-control">
				</div>
				<div class="form-group">

					<label for="category_id">Category</label>
					<select class="form-control" name="category_id" id="category_id">
						<option>Choose..</option>
						<?php

							$sql = "SELECT * FROM categories";
							$stmt = $pdo->prepare($sql);
							$stmt->execute();
							$categories = $stmt->fetchAll();

							foreach ($categories as $category) {
						?>
							<option value="<?php echo $category['id']; ?>"><?php echo $category['name']; ?></option>
						<?php
						}
						?>
					</select>
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
