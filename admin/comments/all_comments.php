<div class="content px-2 w-100">
    <?php
    // insertComment();
    if (isset($_GET['deletecomment'])) {
        deleteComment($_GET['deletecomment']);
    }
    if (isset($_POST['update_comment'])) {
        updateComment($_POST['id']);
    }
    if (isset($_GET['approve'])) {
        approveComment($_GET['approve']);
    }
    if (isset($_GET['unapprove'])) {
        unapproveComment($_GET['unapprove']);
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
            <td>Approving</td>
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
                    <td class="align-middle"><?= $row['id'] ?></td>
                    <td class="align-middle"><?= $row['post_id'] ?></td>
                    <td class="align-middle"><?= $row['author'] ?></td>
                    <td class="align-middle"><?= $row['email'] ?></td>
                    <td class="align-middle"><?= $row['content'] ?></td>
                    <td class="align-middle
                    <?php
                    if ($row['status'] == 'approved') {
                        echo 'bg-success';
                    } else {
                        echo 'bg-danger';
                    }
                    ?>
                    "><?= $row['status'] ?></td>
                    <td class="align-middle"><?= $row['date'] ?></td>
                    <td>
                        <div class="btn-group">
                            <a class="btn btn-success mr-2" href="index.php?approve=<?= $row['id'] ?>">Approve</a>
                            <a href="index.php?unapprove=<?= $row['id'] ?>" class="btn btn-warning">Unapprove</a>
                        </div>
                    </td>
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