<?php
include "components/header.php";
include "components/nav.php";
if (isset($_GET['page'])) {
  $page = $_GET['page'];
} else {
  $page = 1;
}
if (isset($_POST['create_post'])) {
  insertPost();
}
if (isset($_POST['login'])) {
  $user = logInUser($_POST['username'], $_POST['password']);
  if ($user == NULL) {
?>
    <div class="alert alert-danger">Wrong username or password</div>
  <?php
  } else {
  ?>
    <div class="alert alert-success">You are being logged in, <?= $_SESSION['username'] ?>, wait for page to refresh!</div>
<?php
  }
}
?>
<?php
if (isset($_POST['register'])) {
  $registered = registerUser($_POST['username'], $_POST['email'], $_POST['password']);
  if ($registered) {
?>
    <div class="alert alert-danger">Wrong username or password</div>
<?php
  }
}
?>

<!-- Page Content -->
<div class="container stretch">

  <div class="row">

    <!-- Blog Entries Column -->
    <div class="col-md-8">

      <h1 class="my-4">Dev Blog</h1>
      <!-- Blog Post -->
      <?php
      if (isset($_POST['search_posts'])) {
        $posts = getPostsByFilter($_POST['filter']);
      } else {
        $posts = getAllPostsLimited(($page - 1) * 5, 5);
        $nextPagePosts = mysqli_fetch_assoc(getAllPostsLimited($page * 5, 5));
      }

      if (isset($_GET['category'])) {
        $posts = getAllPostsWithCategory($_GET['category']);
      } elseif (isset($_GET['author'])) {
        $posts = getPostsByFilter($_GET['author']);
      }
      if (isset($_GET['action']) && $_GET['action'] == 'show') {
        include 'posts/show_post.php';
      } elseif (isset($_GET['action']) && $_GET['action'] == 'add') {
        include 'posts/add_post.php';
      } else {
        foreach ($posts as $post) {
      ?>
          <div class="card mb-4">
            <img class="card-img-top" src="images\<?= $post['image'] ?>" alt="Card image cap">
            <div class="card-body">
              <h2 class="card-title"><?= $post['title'] ?></h2>
              <p class="card-text"><?= (strlen($post['content']) > 300) ? substr($post['content'], 0, 300) . "..." : $post['content'] ?></p>
              <a href="index.php?action=show&id=<?= $post['id'] ?>" class="btn btn-primary">Read More &rarr;</a>
            </div>
            <div class="card-footer text-muted">
              <?= $post['date'] ?> by
              <a href="index.php?author=<?= $post['author'] ?>"><?= $post['author'] ?></a>
            </div>
          </div>

      <?php }
      }
      $postsCount = mysqli_num_rows($posts);
      ?>


      <?php include "components/pagination.php"; ?>

    </div>

    <?php include "components/widgets.php"; ?>
    <!-- /.row -->

  </div>
  <!-- /.container -->
</div>
<?php include "components/footer.php"; ?>