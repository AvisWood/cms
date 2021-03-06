<?php
include "includes/header.php";

?>
<body>

<div id="wrapper">

  <!-- Navigation -->
  <?php include "includes/navigation.php";?>

  <div id="page-wrapper">

    <div class="container-fluid">

      <!-- Page Heading -->
      <div class="row">
        <div class="col-lg-12">
          <h1 class="page-header">
            Welcome to Admin
            <small>Author</small>
          </h1>

          <div class="col-xs-6">
            <?php
              insert_cat();
            ?>

          <form action="" method="post">
            <div class="form-group">
              <label for="cat-title">Add Category</label>
              <input type="text" class="form-control" name="cat_title">
            </div>
            <div class="form-group">
              <input  class="btn btn-primary" type="submit" name="submit" value="Add Category">
            </div>

          </form>

            <?php // update query
            if(isset($_GET['edit'])){
              $cat_id = $_GET['edit'];
              include "includes/update_cat.php";
            }
            ?>




          </div> <!--add category form-->

          <div class="col-xs-6">


            <table class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>Id</th>
                  <th>Category Title</th>
                </tr>
              </thead>
              <tbody>

              <?php //Find all categories query
              findAllCategories();
              ?>

              <?php // delete query
                  delete_cat();
              ?>

              </tbody>
            </table>


        </div>
      </div>
      <!-- /.row -->

    </div>
    <!-- /.container-fluid -->



  </div>
  <!-- /#page-wrapper -->

  <?php
  include "includes/footer.php";

  ?>
