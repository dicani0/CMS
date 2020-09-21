<?php
if (isset($_GET['action'])) {
    switch ($_GET['action']) {
        case 'addcomment':
            include 'add_comment.php';
            break;
        case 'editcomment':
            include 'edit_comment.php';
            break;
        case 'show';
            include 'show_post.php';
            break;
        default:
            break;
    }
} else {
    include 'all_comments.php';
}
