<?php
include "components/header.php";
include "components/nav.php";
$user = getUserById($_SESSION['id']);
$comments = getUserComments($_SESSION['id']);
$posts = getUserPosts($_SESSION['id']);
if (isset($_POST['edit_user'])) {
    updateProfile($_SESSION['id']);
}
?>
<div class="container stretch p-3">
    <?php
    if (!isset($_GET['action'])) {
    ?>
        <div class="row border-bottom">
            <div class="col-3">
                <img src="./images/users/<?= $user['avatar'] ?>" alt="" class="img-fluid">
            </div>
            <div class="col-9">
                <h2 class="text-info"><?= $user['firstname'] . " " . $user['lastname'] ?><span><a href="?action=edit" class="btn btn-primary ml-3">Edit</a></span></h2>
                <p class="text-muted"><?= $user['email'] ?></p>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-6">
                <h4 class="text-center font-weight-bold">Posts</h4>
                <p>Total posts: <?= mysqli_num_rows($posts) ?></p>
            </div>
            <div class="col-6">
                <h4 class="text-center font-weight-bold">Comments</h4>
                <p>Total comments: <?= mysqli_num_rows($comments) ?></p>
                <div class="list-group">
                    <?php
                    foreach ($comments as $comment) {
                    ?>
                        <a href="index.php?action=show&id=<?= $comment['post_id'] ?>" class="list-group-item list-group-item-dark d-flex justify-content-between align-items-center"><?= getPostById($comment['post_id'])['title'] ?> <span class="badge badge-danger"><?= $comment['date'] ?></span></a>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    <?php } else { ?>
        <form method="post" enctype="multipart/form-data" action="profile.php">
            <div class="row w-100">
                <div class="col-6">

                    <div class="form-group">
                        <input type="hidden" name="id" value="<?= $user['id'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Username</label>
                        <input type="text" class="form-control" name="username" id="" value="<?= $user['username'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" class="form-control" name="password" id="" value="">
                    </div>
                    <div class="form-group">
                        <label for="">First name</label>
                        <input type="text" class="form-control" name="firstname" id="" value="<?= $user['firstname'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Last name</label>
                        <input type="text" class="form-control" name="lastname" id="" value="<?= $user['lastname'] ?>">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="text" name="email" class="form-control" id="" value="<?= $user['email'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Image</label>
                        <input type="file" name="avatar" class="form-control" id="">
                        <div class="text-center">
                            <img width="400" class="img-fluid mt-4" src="/cms/images/users/<?= $user['avatar'] ?>" alt="Image">
                        </div>
                    </div>
                    <div class="form-group text-center">
                        <input type="submit" class="form-control btn btn-dark w-50" name="edit_user" value="Update profile">
                    </div>
                </div>
            </div>
        </form>
    <?php } ?>
</div>
<?php include "components/footer.php"; ?>