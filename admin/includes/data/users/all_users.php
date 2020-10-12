<div class="content px-2 w-100">
    <?php
    if (isset($_POST['add_user'])) {
        var_dump(addUser());
    }
    if (isset($_POST['edit_user'])) {
        editUser($_POST['id']);
    }
    if (isset($_GET['deleteuser'])) {
        deleteUser($_GET['deleteuser']);
    }
    if (isset($_GET['msg']) && $_GET['msg'] == 'success') {
    ?>
        <div class="alert alert-success mt-2" role="alert">
            User Added!
        </div>
    <?php
    }
    ?>
    <table class="table table-bordered">
        <thead class="thead">
            <td>ID</td>
            <td>Username</td>
            <td>Password</td>
            <td>Firstname</td>
            <td>Lastname</td>
            <td>Email</td>
            <td>Role</td>
            <td>Avatar</td>
            <td>Actions</td>
        </thead>
        <tbody>
            <?php
            $users = getAllUsers();
            foreach ($users as $row) {
            ?>
                <tr>
                    <td><?= $row['id'] ?></td>
                    <td><?= $row['username'] ?></td>
                    <td><?= $row['password'] ?></td>
                    <td><?= $row['firstname'] ?></td>
                    <td><?= $row['lastname'] ?></td>
                    <td><?= $row['email'] ?></td>
                    <td><?= $row['role'] ?></td>
                    <td><img width="100" src="/cms/images/users/<?= $row['avatar'] ?>" alt="Avatar"></td>
                    <td>
                        <div class="btn-group">
                            <a class="btn btn-dark mr-2" href="index.php?action=edituser&edituser=<?= $row['id'] ?>">Edit</a>
                            <a href="index.php?deleteuser=<?= $row['id'] ?>" class="btn btn-danger">Delete</a>
                        </div>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>