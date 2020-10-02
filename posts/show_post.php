<?php
$post = getPostById($_GET['id']);
$category = getCategoryById($post['category_id']);
$comments = getCommentByPost($_GET['id']);
?>

<div class="card w-100 mx-auto">
    <img src="../../images/<?= $post['image'] ?>" alt="" class="align-self-center">
    <h5 class="card-header">
        <div class="clearfix">
            <span class="float-left"><?= $post['title'] ?></span>
            <span class="float-right text-muted font-italic"><?= $post['date'] ?></span>
        </div>
        <div class="blockquote-footer">
            <?= $post['author'] ?>
        </div>
    </h5>
    <div class="card-body">
        <img class="card-img-top mb-3" src="..\images\<?= $post['image'] ?>" alt="Card image cap">
        <div class="card-text text-center">
            <?= $post['content'] ?>
        </div>
        <hr>
        <div class="card-text">
            <div class="row">
                <div class="col-12">
                    <div class="float-right">
                        <span class="text-muted">
                            Tags
                        </span>
                        <span class="font-italic">
                            <?= $post['tags'] ?>
                        </span>
                    </div>

                </div>
            </div>
        </div>
        <hr>
        <div class="card-footer">
            <h4>Comments</h4>
            <hr>
            <form action="index.php?action=show&id=<?= $post['id'] ?>" method="post">
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <input type="hidden" name="post_id" value="<?= $_GET['id'] ?>" class="form-control">
                        <label for="Author">Author</label>
                        <input type="text" name="author" class="form-control">
                        <label for="Email">Email</label>
                        <input type="text" name="email" class="form-control">
                    </div>
                    <div class="col-lg-6 col-12">
                        <label for="Comment">Comment</label>
                        <textarea name="content" class="form-control" id="" cols="30" rows="4"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center mt-4">
                        <input type="submit" class="btn btn-primary w-25" name="add_comment" value="Add">
                    </div>
                </div>
            </form>
            <?php
            foreach ($comments as $comment) {
            ?>
                <hr>
                <div class="media my-2">
                    <div class="media-body">
                        <div class="row">
                            <div class="col-6">
                                <h5 class="mt-0"><?= $comment['author'] ?>
                            </div>
                            <div class="col-6"> <small class="float-right"><i><?= $comment['date'] ?></i></small></h5>
                            </div>
                        </div>
                        <p class="font-italic"><?= $comment['content'] ?></p>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</div>