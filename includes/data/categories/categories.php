<?php
include '../../header.php';
insertCategory();
deleteCategory();
editCategory();
?>
<div class="wrapper">
    <?php include '../../sidebar.php'; ?>
    <div class="row w-100 p-2">
        <div class="col-6">
            <form action="" method="post">
                <div class="form-group">
                    <label for="name">Category name</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="form-group">
                    <input type="submit" name="submit" class="btn btn-dark" value="Add category">
                </div>
            </form>
            <?php
            if (isset($_GET['editcategory'])) {
                $category = getCategoryById($_GET['editcategory'])
            ?>
                <form action="" method="post">
                    <div class="form-group">
                        <label for="name">Edit category</label>
                        <input type="text" class="form-control" name="name" value="<?php echo "{$category['name']}"; ?>">
                    </div>
                    <div class="form-group">
                        <input type="submit" name="update" class="btn btn-dark" value="Update">
                    </div>
                </form>
            <?php
            }
            ?>
        </div>
        <div class="col-6">
            <table class="table table-striped text-center">
                <thead class="thead">
                    <tr>
                        <th>ID</th>
                        <th>Category name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $categories = getAllCategories();
                    foreach ($categories as $row) {
                    ?>

                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['name'] ?></td>
                        <td><a class="btn btn-danger btn-sm mr-2" href="<?php echo "categories.php?deletecategory={$row['id']}" ?>">Delete</a><a class="btn btn-secondary btn-sm" href="categories.php?editcategory=<?= $row['id'] ?>">Edit</a></td>

                    <?php
                        echo '</tr>';
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include '../../footer.php' ?>