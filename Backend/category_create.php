<?php 

include 'include/header.php';

?>
<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Category Create</h1>
		<a href="subcategory_list.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-chevron-left text-white-50 mx-1"></i>Go Back</a>
	</div>

	<div class="row">
		<div class="offset-md-2 col-md-8">
			<form action="addcategory.php" method="POST" enctype="multipart/form-data">
				<div class="form-group">
					<label for="name">Category Name</label>
					<input type="text" name="name" id="name" class="form-control">
				</div>
				<div class="form-group">
					<label for="photo">Category Photo</label>
					<input type="file" name="photo" id="photo" class="form-control-file" accept="image/*">
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
