<?php
    $post = getPostById($_GET['editpost']);
?>
<form method="post" class="w-100 p-2" enctype="multipart/form-data" action="">
    <div class="row w-100">
        <div class="col-6">                                    
            <div class="form-group">
                <label for="">Category</label>
                <input type="text" class="form-control" name="category" id="" value="<?=$post['category_id']?>">
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
                <input type="submit" class="form-control btn btn-dark w-50" name="create_post" value="Update">
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
                <img class="img-fluid mt-4" src="/cms/images/<?=$post['image']?>" alt="Image">
            </div>
        </div>
    </div>
</form>