<?php
$user = getUserById($_GET['edituser']);
?>
<div class="content w-100 px-2">
    <form method="post" enctype="multipart/form-data" action="index.php">
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
                    <input type="password" class="form-control" name="password" id="" value="<?= $user['password'] ?>">
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
                    <label for="">Role</label>
                    <select multiple name="role" class="form-control" id="">
                        <option <?php if ($user['role'] == 'admin') {
                                    echo 'selected';
                                } ?> value="admin">Admin</option>
                        <option <?php if ($user['role'] == 'user') {
                                    echo 'selected';
                                } ?> value="user">User</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Image</label>
                    <input type="file" name="avatar" class="form-control" id="">
                    <div class="text-center">
                        <img width="400" class="img-fluid mt-4" src="/cms/images/users/<?= $user['avatar'] ?>" alt="Image">
                    </div>
                </div>
                <div class="form-group text-center">
                    <input type="submit" class="form-control btn btn-dark w-50" name="edit_user" value="Update user">
                </div>
            </div>
        </div>
    </form>
</div>