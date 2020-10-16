<?php include "components/header.php"; ?>
<?php include "components/nav.php";
logOutUser();
?>

<!-- Page Content -->
<div class="container stretch">

  <div class="row">

    <!-- Blog Entries Column -->
    <div class="col-md-8">
      <div class="alert alert-info">You are being logged out!</div>
    </div>

    <!-- Sidebar Widgets Column -->
    <div class="col-md-4">

      <!-- Search Widget -->
      <div class="card my-4">
        <h5 class="card-header">Search</h5>
        <div class="card-body">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search for...">
            <span class="input-group-append">
              <button class="btn btn-secondary" type="button">Go!</button>
            </span>
          </div>
        </div>
      </div>

      <!-- Categories Widget -->
      <div class="card my-4">
        <h5 class="card-header">Categories</h5>
        <div class="card-body">
          <div class="d-flex p-2 flex-wrap">
            <?php
            $categories = getAllCategories();
            foreach ($categories as $category) {
            ?>
              <div class="w-50 my-1"><a href=""><?= $category['name'] ?></a></div>
            <?php
            }
            ?>

          </div>
        </div>

        <!-- Side Widget -->
        <div class="card my-4">
          <h5 class="card-header">Side Widget</h5>
          <div class="card-body">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestias repudiandae excepturi esse blanditiis nam voluptas voluptates necessitatibus, ad fuga ab eaque voluptate commodi asperiores. Quo natus facere quos illo reiciendis.
          </div>
        </div>

      </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->
</div>
<?php include "components/footer.php"; ?>
</body>
<script>
  setTimeout(function() {
    window.location.href = "index.php"
  }, 3000);
</script>

</html>