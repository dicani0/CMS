<div class="content p-2 w-100">
    <?php
    if (isset($_POST['create_post'])) {
        insertPost();
    ?>
        <div class="alert alert-info mt-2">Post added!</div>
    <?php
    }
    if (isset($_GET['deletepost'])) {
        deletePost($_GET['deletepost']);
    ?>
        <div class="alert alert-danger mt-2">Post deleted!</div>
    <?php
    }
    if (isset($_POST['update_post'])) {
        updatePost($_POST['id']);
    ?>
        <div class="alert alert-success mt-2">Post updated!</div>
    <?php
    }
    ?>
    <form action="./" class="row mx-auto mb-0" method="post">
        <div class="col-2 pl-0 pr-1">
            <div class="form-group">
                <select class="form-control" name="status" id="">
                    <option value="published">Published</option>
                    <option value="draft">Draft</option>
                    <option value="removed">Removed</option>
                </select>
            </div>
        </div>
        <div class="col-4 pl-1">
            <input class="btn btn-secondary" name="bulk_update" type="submit" value="Update selected">
        </div>

        <?php
        if (isset($_POST['bulk_update']) && isset($_POST['selected_posts'])) {
            bulkUpdatePostStatus($_POST['selected_posts'], $_POST['status']);
        }
        ?>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <td><input type="checkbox" name="" id="selectAllBoxes"></td>
                    <td>ID</td>
                    <td>Category</td>
                    <td>Title</td>
                    <td>Author</td>
                    <td>Date</td>
                    <td>Image</td>
                    <td>Content</td>
                    <td>Comments</td>
                    <td>Status</td>
                    <td>Tags</td>
                    <td>Actions</td>
                </tr>
            </thead>
            <tbody>
                <?php
                if (isset($_GET['category'])) {
                    $posts = getAllPostsWithCategory($_GET['category']);
                } else {
                    $posts = getAllPosts();
                }
                foreach ($posts as $row) {
                    $category = getCategoryById($row['category_id']);
                ?>
                    <tr>
                        <td><input class="checkbox" type="checkbox" name="selected_posts[]" value="<?= $row['id'] ?>" id=""></td>
                        <td><?= $row['id'] ?></td>
                        <td><?= $category['name'] ?></td>
                        <td><a class="btn btn-info" href="index.php?action=show&id=<?= $row['id'] ?>"><?= $row['title'] ?></a></td>
                        <td><?= $row['author'] ?></td>
                        <td><?= $row['date'] ?></td>
                        <td><img width="100" src="/cms/images/<?= $row['image'] ?>" alt="Image"></td>
                        <td><?= $row['content'] ?></td>
                        <td><?= $row['comment_count'] ?></td>
                        <td><?= $row['status'] ?></td>
                        <td><?= $row['tags'] ?></td>
                        <td>
                            <div class="btn-group">
                                <a class="btn btn-dark mr-2" href="index.php?action=editpost&editpost=<?= $row['id'] ?>">Edit</a>
                                <a href="index.php?deletepost=<?= $row['id'] ?>" class="btn btn-danger">Delete</a>
                            </div>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </form>
</div>

<script>
    $(document).ready(function() {
        $('#selectAllBoxes').click(function() {
            if (this.checked) {
                $('.checkbox').each(function() {
                    this.checked = true;
                })
            } else {
                $('.checkbox').each(function() {
                    this.checked = false;
                })
            }
        });
    })
</script>