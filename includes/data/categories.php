<?php
    insertCategory();
    deleteCategory();
    editCategory();
    // if(isset($_GET['editcategory'])) {
    //     $query = "SELECT * from categories WHERE id = {$_GET['editcategory']}";
    //     $select_category_by_id_query = mysqli_query($connection, $query);
    //     while ($row = mysqli_fetch_assoc($select_category_by_id_query)) {
    //         $category_id = $row['id'];
    //         $category_name = $row['name'];
    //     }
    //     if(isset($_POST['update'])) {
    //         $category_name = $_POST['name'];
    //         if($category_name == '' || empty($category_name)) {
    //             echo 'Name field cannot be empty';
    //         }
    //         else{
    //             $query = "UPDATE categories SET name = '{$category_name}' WHERE id = {$category_id}";
    //             $update_category_query = mysqli_query($connection, $query);
    //         }
    //     }
    // }
?>
<div class="row">
    <div class="col-6">
        <form action="" method="post">
            <div class="form-group">
                <label for="name">Category name</label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="form-group">
                <input type="submit" name="submit" class="btn btn-primary" value="Add category">
            </div>  
        </form>
        <?php
            if (isset($_GET['editcategory'])) {
                $category = getCategoryById();
        ?>
        <form action="" method="post">
            <div class="form-group">
                <label for="name">Edit category</label>
                <input type="text" class="form-control" name="name" value="<?php echo "{$category['name']}"; ?>">
            </div>
            <div class="form-group">
                <input type="submit" name="update" class="btn btn-success" value="Update">
            </div>
        </form>
        <?php
            }
        ?>
    </div>
    <div class="col-6">
        <table class="table table-striped">
            <thead class="thead">
                <tr>
                    <th>ID</th>
                    <th>Category name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $query = 'SELECT * FROM categories';
                    $select_all_categories_query = mysqli_query($connection, $query);
                    while ($row = mysqli_fetch_assoc($select_all_categories_query)) {
                        echo '<tr>';
                ?>
                        
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['name'] ?></td>
                    <td><a class="btn btn-danger btn-sm" href="<?php echo "index.php?action=categories&deletecategory={$row['id']}" ?>">Delete</a><a class="btn btn-secondary btn-sm" href="index.php?action=categories&editcategory=<?= $row['id']?>">Edit</a></td>
                <?php
                    echo '</tr>';
                    }
                ?>
            </tbody>
        </table>
    </div>
</div>


    