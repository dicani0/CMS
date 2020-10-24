<?php
$usersOnline = getUsersOnline();
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <a class="navbar-brand" href="/cms">Blog</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home
                    <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">About</a>
            </li>
            <?php
            if (!isset($_SESSION['username'])) :
            ?>
                <li class="nav-item">
                    <a class="nav-link" href="/cms/login.php">Sign In</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/cms/register.php">Sign Up</a>
                </li>
            <?php else : ?>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="#" id="profileDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><?= $_SESSION['username'] ?></a>
                    <div class="dropdown-menu" aria-labelledby="profileDropdown">
                        <a href="profile.php" class="dropdown-item">Profile</a>
                        <a href="logout.php" class="dropdown-item">Log out</a>
                    </div>
                </li>

                <li class="nav-item align-self-center">
                    <a class="btn btn-primary mx-1" href="/cms/?action=add">Add Post</a>
                </li>
            <?php
            endif;
            ?>
            <?php if (isset($_SESSION['role']) && $_SESSION['role'] == 'admin') : ?>
                <li class="nav-item">
                    <a class="nav-link btn btn-outline-warning mx-1" href="/cms/admin">Admin panel</a>
                </li>
            <?php
            endif;
            ?>
            <li class="nav-item border border-danger">
                <span class="navbar-text px-2">Users online: <span class="usersonline"></span> </span>
            </li>
        </ul>
    </div>
</nav>