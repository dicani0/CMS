<?php
    $post = getPostById($_GET['id']);
    $category = getCategoryById($post['category_id']);
?>

<div class="card w-50 m-auto">
    <img src="../../../images/<?= $post['image'] ?>" alt="" class="card-img-top">
    <h5 class="card-header">
            <?= $post['title'] ?>
        </h5>
    <div class="card-body">
        <h6 class="card-subtitle">
            <?= $post['author'] ?>
        </h6>
        <hr>
        <div class="card-text">
            <?= $post['content'] ?>
        </div>
        <hr>
        <div class="card-text">
            <?= $post['date'] ?>
            <hr>
            <?= $post['tags'] ?>
        </div>
    </div>
    
</div>

