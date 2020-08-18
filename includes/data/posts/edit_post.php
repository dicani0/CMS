<?php
    $post = getPostById($_GET['editpost']);
    updatePost($post['id']);
    $categories = getAllCategories();
?>
<form method="post" class="w-100 p-2" enctype="multipart/form-data" action="posts.php">
    <div class="row w-100">
        <div class="col-6">                                    
            <div class="form-group">
                <label for="">Category</label>
                <label for="">Category</label>
                    <select class='form-control' name="category" id="">
                        <?php 
                            foreach ($categories as $category) {
                        ?>
                            <?php
                                if($post['category_id'] === $category['id']) {
                            ?>
                            <option selected value="<?=$category['id']?>"><?=$category['name']?></option>
                            <?php
                                }
                                else {
                            ?>
                        <option  value="<?=$category['id']?>"><?=$category['name']?></option>
                        <?php
                                }
                            }
                        ?>
                    </select>
            </div>
            <div class="form-group">
                <label for="">Title</label>
                <input type="text" class="form-control" name="title" id="" value="<?=$post['title']?>">
            </div>
            <div class="form-group">
                <label for="">Author</label>
                <input type="text" class="form-control" name="author" id="" value="<?=$post['author']?>">
            </div>
            <div class="form-group">
                <label for="">Tags</label>
                <input type="text" class="form-control" name="tags" id="" value="<?=$post['tags']?>">
            </div>
            <div class="form-group text-center">
                <input type="submit" class="form-control btn btn-dark w-50" name="update_post" value="Update">
            </div>
        </div>
        <div class="col-6">
            <div class="form-group">
                <label for="">Content</label>
                <textarea name="content" class="form-control" id="" cols="30" rows="6" value="<?=$post['content']?>"></textarea>
            </div>
            <div class="form-group">
                <label for="">Image</label>
                <input type="file" name="image" class="form-control" id="">
                <div class="text-center">
                    <img width="400" class="img-fluid mt-4" src="/cms/images/<?=$post['image']?>" alt="Image">                
                </div>
            </div>
        </div>
    </div>
</form>