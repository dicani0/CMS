<div class="content px-2 w-100">
    <?php
    if (isset($_GET['deletepost'])) {
        deletePost($_GET['deletepost']);
    }
    if (isset($_POST['update_post'])) {
        updatePost($_POST['id']);
    }
    if (isset($_POST['create_post'])) {
        insertPost();
    }
    $_POST = array();
    ?>
    <table class="table table-bordered">
        <thead class="thead">
            <td>ID</td>
            <td>Category</td>
            <td>Title</td>
            <td>Author</td>
            <td>Date</td>
            <td>Image</td>
            <td>Content</td>
            <td>Comments</td>
            <td>Tags</td>
            <td>Actions</td>
        </thead>
        <tbody>
            <?php
            $posts = getAllPosts();
            foreach ($posts as $row) {
                $category = getCategoryById($row['category_id']);
            ?>
                <tr>
                    <td><?= $row['id'] ?></td>
                    <td><?= $category['name'] ?></td>
                    <td><?= $row['title'] ?></td>
                    <td><?= $row['author'] ?></td>
                    <td><?= $row['date'] ?></td>
                    <td><img width="100" src="/cms/images/<?= $row['image'] ?>" alt="Image"></td>
                    <td><?= $row['content'] ?></td>
                    <td><?= $row['comment_count'] ?></td>
                    <td><?= $row['tags'] ?></td>
                    <td><a class="btn btn-dark mr-2" href="/cms/includes/data/posts/posts.php?action=editpost&editpost=<?= $row['id'] ?>">Edit</a><a href="/cms/includes/data/posts/posts.php?deletepost=<?= $row['id'] ?>" class="btn btn-danger">Delete</a></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>