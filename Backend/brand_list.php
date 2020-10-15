<?php 

include 'include/header.php';
include 'dbconnect.php';

?>
<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Brand List</h1>
    <a href="brand_create.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50 mx-1"></i>Add Brand</a>
  </div>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Brands</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>#</th>
              <th>Brand Name</th>
              <th>Photo</th>
              <th>Option</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>#</th>
              <th>Brand Name</th>
              <th>Photo</th>
              <th>Option</th>
            </tr>
          </tfoot>
          <tbody>
            <?php 
              $sql="SELECT * FROM brands";
              $stmt=$pdo->prepare($sql);
              $stmt->execute();
              $brands=$stmt->fetchAll();
              $i = 0;
              foreach ($brands as $brand) {
              $i++;
            ?>
            <tr>
              <td><?php echo $i ?></td>
              <td><?php echo $brand['name']; ?></td>
              <td><img src="<?php echo $brand['photo']; ?>" height="20px"></td>
              <td>
               <a href="brand_edit.php?id=<?php echo $brand['id'] ?>" class="btn btn-outline-warning btn-sm">Edit</a> <a href="brand_delete.php?id=<?php echo $brand['id'];  ?>" class="btn btn-outline-danger btn-sm">Delete</a></td>

            </tr>

          <?php } ?>
          </tbody>
        </table>
      </div>
    </div>


  </div>
  <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<?php 

include 'include/footer.php';

?>
