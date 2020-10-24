<?php
include "./../db.php";
function getUsersOnline()
{
    if (isset($_GET['onlineusers'])) {
        global $connection;
        $time = time();
        $timeout = $time - 60;
        echo (mysqli_num_rows(mysqli_query($connection, "SELECT * FROM users_online WHERE time > '$timeout'")));
    }
}
getUsersOnline();
