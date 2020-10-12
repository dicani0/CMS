<?php
include "components/header.php";
include "components/nav.php";
$user = getUserById($_SESSION['id']);
?>
<div class="container stretch p-2">
    <div class="row border-bottom">
        <div class="col-3">
            <img src="./images/users/<?= $user['avatar'] ?>" alt="" class="img-fluid">
        </div>
        <div class="col-9">
            <h2 class="text-info"><?= $user['firstname'] . " " . $user['lastname'] ?><span><a href="" class="btn btn-primary ml-3">Edit</a></span></h2>
            <p class="text-muted"><?= $user['email'] ?></p>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-6">
            <h4 class="text-center font-weight-bold">Posts</h4>
            <p>Total posts: </p>
        </div>
        <div class="col-6">
            <h4 class="text-center font-weight-bold">Comments</h4>
            <p>Total comments: </p>
        </div>
    </div>
</div>
<?php include "components/footer.php"; ?>