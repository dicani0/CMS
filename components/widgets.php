    <!-- Sidebar Widgets Column -->
    <div class="col-md-4">

        <!-- Search Widget -->
        <div class="card my-4">
            <h5 class="card-header">Search</h5>
            <div class="card-body">
                <form action="/cms/index.php" method="post">
                    <div class="input-group">
                        <input type="text" class="form-control" name="filter" placeholder="Search for...">
                        <span class="input-group-append">
                            <input type="submit" class="btn btn-secondary" name="search_posts" value="Go!">
                        </span>
                    </div>
                </form>
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
                        <div class="w-50 my-1"><a href="/cms/index.php?category=<?= $category['id'] ?>"><?= $category['name'] ?></a></div>
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