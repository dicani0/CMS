<?php
$posts = getAllPosts();
foreach ($posts as $row) {
    $category_id = $row['category_id'];
    $title = $row['title'];
    $author = $row['author'];
    $date = $row['date'];
    $image = $row['image'];
    $content =  $row['content'];
    $tags = $row['tags'];
?>


    <div class="jumbotron p-4 text-dark">
        <h1 class="display-4"><?php echo $title; ?></h1>
        <hr>
        <div class="p-1"> by <a href="#"><?php echo $author; ?></a></div>
        <div class="p-1 mb-3"><i class="far fa-clock"></i> <?php echo " " . $date; ?></div>
        <img width="500" src="/cms/images/<?= $image ?>" alt="Photo" class="img-thumbnail mb-3">
        <p class="lead"><?php echo $content; ?></p>
        <hr>
        <small><?php echo $tags ?></small>
    </div>

<?php
}
?>