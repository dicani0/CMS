<?php
insertPost();
$categories = getAllCategories();
?>

<div class="content w-100 px-2">
    <form method="post" enctype="multipart/form-data" action="index.php">
        <div class="row w-100">
            <div class="col-6">

                <div class="form-group">
                    <label for="">Category</label>
                    <select class='form-control' name="category" id="">
                        <?php
                        foreach ($categories as $category) {
                        ?>
                            <option value="<?= $category['id'] ?>"><?= $category['name'] ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Titles</label>
                    <input type="text" class="form-control" name="title" id="">
                </div>
                <div class="form-group">
                    <label for="">Author</label>
                    <input type="text" class="form-control" name="author" id="">
                </div>
                <div class="form-group">
                    <label for="">Tags</label>
                    <input type="text" class="form-control" name="tags" id="">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="">Content</label>
                    <textarea name="content" class="form-control" id="" cols="30" rows="6"></textarea>
                </div>
                <div class="form-group">
                    <label for="">Image</label>
                    <input type="file" name="image" class="form-control" id="">
                </div>
                <div class="form-group text-center">
                    <input type="submit" class="form-control btn btn-dark w-50" name="create_post" value="Add post">
                </div>
            </div>
        </div>
    </form>
</div>