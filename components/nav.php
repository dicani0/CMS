<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <div class="container">
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
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php"><?= $_SESSION['username'] ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-primary" href="/cms/?action=add">Add Post</a>
                    </li>
                <?php
                endif;
                ?>
                <?php if (isset($_SESSION['role']) && $_SESSION['role'] == 'admin') : ?>
                    <li class="nav-item">
                        <a class="nav-link btn btn-outline-warning" href="/cms/admin">Admin panel</a>
                    </li>
                <?php
                endif;
                ?>
            </ul>
        </div>
    </div>
</nav>