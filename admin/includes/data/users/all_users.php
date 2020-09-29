<div class="content px-2 w-100">
    <?php
    ?>
    <table class="table table-bordered">
        <thead class="thead">
            <td>ID</td>
            <td>Username</td>
            <td>Password</td>
            <td>Firstname</td>
            <td>Lastname</td>
            <td>Email</td>
            <td>Avatar</td>
            <td>Role</td>
            <td>Tags</td>
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
                            <a class="btn btn-dark mr-2" href="index.php?action=editpost&editpost=<?= $row['id'] ?>">Edit</a>
                            <a href="index.php?deletepost=<?= $row['id'] ?>" class="btn btn-danger">Delete</a>
                        </div>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>