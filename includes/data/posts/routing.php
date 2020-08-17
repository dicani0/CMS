<?php

    if (isset($_GET['action'])) {
        switch ($_GET['action']) {
            case 'addpost':
                include 'add_post.php';
                break;
            case 'editpost':
                include 'edit_post.php';
                break;                
            default:
                # code...
                break;
        }
    }
    else {
        include 'all_posts.php';
    }


?>