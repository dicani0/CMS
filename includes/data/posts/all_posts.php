<div class="content px-2 w-100">
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
            <tr>
                <?php 
                    $posts = getAllPosts();
                    foreach ($posts as $row) {
                ?>
                <td><?= $row['id'] ?></td>
                <td><?= $row['category_id'] ?></td>
                <td><?= $row['title'] ?></td>
                <td><?= $row['author'] ?></td>
                <td><?= $row['date'] ?></td>
                <td><img width="100" src="/cms/images/<?= $row['image'] ?>" alt="Image"></td>
                <td><?= $row['content'] ?></td>
                <td><?= $row['comment_count'] ?></td>
                <td><?= $row['tags'] ?></td>
                <td></td>
            </tr>
                <?php } ?>
        </tbody>
    </table>
</div>
