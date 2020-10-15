<?php 

include 'include/header.php';
include 'dbconnect.php';

?>
<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Category List</h1>
    <a href="category_create.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50 mx-1"></i>Add Category</a>
  </div>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Category</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>#</th>
              <th>Category Name</th>
              <th>Category Logo</th>
              <th>Option</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>#</th>
              <th>Category Name</th>
              <th>Category Logo</th>
              <th>Option</th>
            </tr>
          </tfoot>
          <tbody>
            <?php 
              $sql="SELECT * FROM categories";
              $stmt=$pdo->prepare($sql);
              $stmt->execute();
              $categories=$stmt->fetchAll();
              $i = 0;

              foreach ($categories as $category) {
              $i++;
            ?>
            <tr>
              <td><?php echo $i; ?></td>
              <td><?php echo $category['name']; ?></td>
              <td><img src="<?php echo $category['logo']; ?>" height="20px"></td>
              <td> <a href="category_edit.php?id=<?php echo $category['id']?>" class="btn btn-outline-warning btn-sm">Edit</a> <a href="category_delete.php?id=<?php echo $category['id']; ?>" class="btn btn-outline-danger btn-sm">Delete</a></td>

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
