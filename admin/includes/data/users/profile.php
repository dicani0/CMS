<?php
$profile = getUserById($_SESSION['id']);
?>
<div class="content w-100 p-2 bg-secondary">
    <div class="row w-100">
        <div class="col-4">
            <img src="../../images/users/<?= $profile['avatar'] ?>" class="w-100" alt="test">

        </div>
        <div class="col-8 p-2 border border-dark">
            <h2 class="mr-auto"><?= $profile['username'] ?><span class="ml-2"><a class="btn btn-primary" href="index.php?action=edituser&edituser=<?= $profile['id'] ?>">Edit</a></span></h2>
            <div class="row mt-4">
                <div class="col-6">
                    <p class="font-weight-bold">First name</p>
                    <p class="font-weight-bold">Last name</p>
                    <p class="font-weight-bold">Email</p>
                    <p class="font-weight-bold">Role</p>
                </div>
                <div class="col-6 text-white">
                    <p class="font-weight-bold"><?= $profile['firstname'] ?></p>
                    <p class="font-weight-bold"><?= $profile['lastname'] ?></p>
                    <p class="font-weight-bold"><?= $profile['email'] ?></p>
                    <p class="font-weight-bold"><?= $profile['role'] ?></p>
                </div>
            </div>


        </div>
    </div>

</div>