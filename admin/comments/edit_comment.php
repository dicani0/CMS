<?php
$comment = getCommentById($_GET['editcomment']);
// updatePost($post['id']);
?>
<form method="post" class="w-100 p-2" enctype="multipart/form-data" action="index.php">
    <div class="row w-100">
        <div class="col-12">
            <div class="">
                <input type="hidden" name="id" value="<?= $comment['id'] ?>">
            </div>
            <div class="form-group">
                <label for="">Author</label>
                <input type="text" class="form-control" name="author" id="" value="<?= $comment['author'] ?>">
            </div>
            <div class="form-group">
                <label for="">Content</label>
                <textarea name="content" class="form-control" id="" cols="30" rows="10"><?= $comment['content'] ?></textarea>
            </div>
            <div class="form-group text-center">
                <input type="submit" class="form-control btn btn-dark w-50" name="update_comment" value="Update">
            </div>
        </div>
</form>