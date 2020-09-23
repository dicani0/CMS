<div class="content px-2 w-100">
    <?php
    insertComment();
    if (isset($_GET['deletecomment'])) {
        deleteComment($_GET['deletecomment']);
    }
    if (isset($_POST['update_comment'])) {
        updateComment($_POST['id']);
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
                $comments = getAllComments();
            }
            foreach ($comments as $row) {
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
                            <a class="btn btn-dark mr-2" href="/cms/admin/comments/index.php?action=editcomment&editcomment=<?= $row['id'] ?>">Edit</a>
                            <a href="index.php?deletecomment=<?= $row['id'] ?>" class="btn btn-danger">Delete</a>
                        </div>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>