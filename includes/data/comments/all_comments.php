<div class="content px-2 w-100">
    <?php
    if (isset($_GET['deletepost'])) {
        deletePost($_GET['deletepost']);
    }
    if (isset($_POST['update_post'])) {
        updatePost($_POST['id']);
    }
    ?>
    <table class="table table-bordered">
        <thead class="thead">
            <td>ID</td>
            <td>Post</td>
            <td>Author</td>
            <td>Email</td>
            <td>Content</td>
            <td>Status</td>
            <td>Date</td>
            <td>Action</td>
        </thead>
        <tbody>
            <?php
            if (isset($_GET['category'])) {
                $posts = getAllPostsWithCategory($_GET['category']);
            } else {
                $posts = getAllComments();
            }
            foreach ($posts as $row) {
                // $category = getCategoryById($row['category_id']);
            ?>
                <tr>
                    <td><?= $row['id'] ?></td>
                    <td><?= $row['post_id'] ?></td>
                    <td><?= $row['author'] ?></td>
                    <td><?= $row['email'] ?></td>
                    <td><?= $row['content'] ?></td>
                    <td><?= $row['status'] ?></td>
                    <td><?= $row['date'] ?></td>
                    <td>
                        <div class="btn-group">
                            <a class="btn btn-dark mr-2" href="/cms/includes/data/posts/posts.php?action=editpost&editpost=<?= $row['id'] ?>">Edit</a>
                            <a href="/cms/includes/data/posts/posts.php?deletepost=<?= $row['id'] ?>" class="btn btn-danger">Delete</a>
                        </div>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>