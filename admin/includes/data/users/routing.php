<?php

if (isset($_GET['action'])) {
    switch ($_GET['action']) {
        case 'adduser':
            include 'add_user.php';
            break;
        case 'edituser':
            include 'edit_user.php';
            break;
        case 'show';
            include 'show_user.php';
            break;
        default:
            include 'all_users.php';
            break;
    }
} else {
    include 'all_users.php';
}
