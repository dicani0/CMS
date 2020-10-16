<?php
include "../components/header.php";
include "../components/nav.php";
if (isset($_POST['add_comment'])) {
    insertComment($_GET['id']);
}
?>

<!-- Page Content -->
<div class="container">

    <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">

            <h1 class="my-4">Dev Blog</h1>

            <!-- Blog Post -->
            <?php
            if (isset($_GET["action"]) && $_GET["action"] == "show") {
                include "show_post.php";
            } elseif (isset($_GET["action"]) && $_GET["action"] == "add_post") {
                include "add_post.php";
            } else {
                $posts = getAllPosts();
                foreach ($posts as $post) {
            ?>
                    <div class="card mb-4">
                        <img class="card-img-top" src="..\images\<?= $post['image'] ?>" alt="Card image cap">
                        <div class="card-body">
                            <h2 class="card-title"><?= $post['title'] ?></h2>
                            <p class="card-text"><?= $post['content'] ?></p>
                            <a href="index.php?action=show&id=<?= $post['id'] ?>" class="btn btn-primary">Read More &rarr;</a>
                        </div>
                        <div class="card-footer text-muted">
                            <?= $post['date'] ?> by
                            <a href="#"><?= $post['author'] ?></a>
                        </div>
                    </div>

                <?php }
                ?>
                <ul class="pagination justify-content-center mb-4">
                    <li class="page-item">
                        <a class="page-link" href="#">&larr; Older</a>
                    </li>
                    <li class="page-item disabled">
                        <a class="page-link" href="#">Newer &rarr;</a>
                    </li>
                </ul>

            <?php
            } ?>

            <!-- Pagination -->

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
<?php include "../components/footer.php"; ?>
</body>