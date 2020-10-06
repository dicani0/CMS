<?php
include __DIR__ . '\includes\header.php';
?>
<div class="wrapper">
    <?php
    include __DIR__ . '\includes\sidebar.php';
    $posts = getAllPosts();
    $categories = getAllCategories();
    $comments = getAllComments();
    $users = getAllUsers();
    ?>
    <div class="card-deck w-100 m-4" style="max-height: 300px;">
        <div class="card bg-dark text-white">
            <div class="card-header">
                <h5 class="card-title">Categories</h5>
            </div>
            <div class="card-body d-flex justify-content-center align-items-center">
                <p class="card-text">
                    <h1><?= mysqli_num_rows($categories); ?></h1>
                </p>
            </div>
            <div class="card-footer">
                <a class="d-flex justify-content-between align-items-center text-white" href="./categories">View details <span class="float-right"><i class="fas fa-angle-double-right"></i></span></a>
            </div>
        </div>
        <div class="card bg-dark text-white">
            <div class="card-header">
                <h5 class="card-title">Posts</h5>
            </div>
            <div class="card-body d-flex justify-content-center align-items-center">
                <p class="card-text">
                    <h1><?= mysqli_num_rows($posts); ?></h1>
                </p>
            </div>
            <div class="card-footer">
                <a class="d-flex justify-content-between align-items-center text-white" href="./posts">View details <span class="float-right"><i class="fas fa-angle-double-right"></i></span></a>
            </div>
        </div>
        <div class="card bg-dark text-white">
            <div class="card-header">
                <h5 class="card-title">Comments</h5>
            </div>
            <div class="card-body d-flex justify-content-center align-items-center">
                <p class="card-text">
                    <h1><?= mysqli_num_rows($comments); ?></h1>
                </p>
            </div>
            <div class="card-footer">
                <a class="d-flex justify-content-between align-items-center text-white" href="./comments">View details <span class="float-right"><i class="fas fa-angle-double-right"></i></span></a>
            </div>
        </div>
        <div class="card bg-dark text-white">
            <div class="card-header">
                <h5 class="card-title">Users</h5>
            </div>
            <div class="card-body d-flex justify-content-center align-items-center">
                <p class="card-text">
                    <h1><?= mysqli_num_rows($users); ?></h1>
                </p>
            </div>
            <div class="card-footer">
                <a class="d-flex justify-content-between align-items-center text-white" href="./users">View details <span class="float-right"><i class="fas fa-angle-double-right"></i></span></a>
            </div>
        </div>
    </div>
</div>
<?php
include __DIR__ . '\includes\footer.php';
?>