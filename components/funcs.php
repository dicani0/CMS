<?php

function insertCategory()
{
    global $connection;
    if (isset($_POST['submit'])) {
        $category_name = $_POST['name'];
        if ($category_name == "" || empty($category_name)) {
            echo "Category name cannot be empty";
        } else {
            $query = "INSERT INTO categories(name) ";
            $query .= "VALUE('{$category_name}')";
            $add_category_query = mysqli_query($connection, $query);

            if (!$add_category_query) {
                die("Query failed" . mysqli_error($connection));
            }
        }
    }
}

function deleteCategory()
{
    global $connection;
    if (isset($_GET['deletecategory'])) {
        $query = "DELETE from categories WHERE id = {$_GET['deletecategory']}";
        $delete_category_query = mysqli_query($connection, $query);
    }
}

function editCategory()
{
    global $connection;
    if (isset($_GET['editcategory'])) {
        $query = "SELECT * from categories WHERE id = {$_GET['editcategory']}";
        $select_category_by_id_query = mysqli_query($connection, $query);
        while ($row = mysqli_fetch_assoc($select_category_by_id_query)) {
            $category_id = $row['id'];
            $category_name = $row['name'];
        }
        if (isset($_POST['update'])) {
            $category_name = $_POST['name'];
            if ($category_name == '' || empty($category_name)) {
                echo 'Name field cannot be empty';
            } else {
                $query = "UPDATE categories SET name = '{$category_name}' WHERE id = {$category_id}";
                $update_category_query = mysqli_query($connection, $query);
            }
        }
    }
}

function getAllCategories()
{
    global $connection;
    $query = 'SELECT * FROM categories';
    $select_all_categories_query = mysqli_query($connection, $query);
    return $select_all_categories_query;
}

function getCategoryById($id)
{
    global $connection;
    $query = "SELECT * from categories WHERE id = {$id}";
    $select_category_by_id_query = mysqli_query($connection, $query);
    return mysqli_fetch_assoc($select_category_by_id_query);
}
// POSTS

function getAllPosts()
{
    global $connection;
    $query = 'SELECT * FROM posts';
    $select_all_posts_query = mysqli_query($connection, $query);
    return $select_all_posts_query;
}

function getAllPostsWithCategory($category)
{
    global $connection;
    $query = "SELECT * FROM posts WHERE category_id = {$category}";
    // var_dump(mysqli_query($connection, $query));
    return mysqli_query($connection, $query);
}

function getPostById($id)
{
    global $connection;
    $query = "SELECT * FROM posts WHERE id = {$id}";
    $select_post_by_id_query = mysqli_query($connection, $query);
    return mysqli_fetch_assoc($select_post_by_id_query);
}

function getPostsByFilter($filter)
{
    global $connection;
    $query = "SELECT * FROM posts WHERE content LIKE '%{$filter}%' OR tags LIKE '%{$filter}%' OR author LIKE '%{$filter}%'";
    $select_post_by_filter_query = mysqli_query($connection, $query);
    return $select_post_by_filter_query;
}

function insertPost()
{
    global $connection;
    if (isset($_POST['create_post'])) {
        $post_category = $_POST['category'];
        $post_title = $_POST['title'];
        $post_author = $_POST['author'];
        $post_date = date('d-m-y');
        $post_tags = $_POST['tags'];
        $post_content = $_POST['content'];
        $post_image = $_FILES['image']['name'];
        $post_image_tmp = $_FILES['image']['tmp_name'];
        $post_comment_count = 5;
        $query = "INSERT INTO posts(category_id, title, author, date, image, content, tags, comment_count) ";
        $query .= "VALUES('{$post_category}', '{$post_title}', '{$post_author}', now(), '{$post_image}', '{$post_content}', '{$post_tags}', '{$post_comment_count}')";
        move_uploaded_file($post_image_tmp, "C:/xampp/htdocs/CMS/images/$post_image");
        $insert_post_query = mysqli_query($connection, $query);
        if ($insert_post_query) {
            header('Location: index.php');
        }
    }
}

function deletePost($id)
{
    global $connection;
    $query = "DELETE from posts WHERE id = {$id}";
    $delete_post_query = mysqli_query($connection, $query);
    return $delete_post_query;
}

function updatePost($id)
{
    global $connection;
    // var_dump($_FILES); exit;
    $post_category = $_POST['category'];
    $post_title = $_POST['title'];
    $post_author = $_POST['author'];
    $post_date = date('d-m-y');
    $post_tags = $_POST['tags'];
    $post_content = $_POST['content'];
    $post_comment_count = 0;
    $query = "UPDATE posts ";

    if (isset($_FILES['image']['error']) && $_FILES['image']['name'] != '') {
        $post_image = $_FILES['image']['name'];
        $post_image_tmp = $_FILES['image']['tmp_name'];
        $query .= "SET category_id = '{$post_category}', title = '{$post_title}', author = '{$post_author}', date = {$post_date}, tags = '{$post_tags}', content = '{$post_content}', image = '{$post_image}' ";
        move_uploaded_file($post_image_tmp, __DIR__ . "/../images/$post_image");
    } else {
        $query .= "SET category_id = '{$post_category}', title = '{$post_title}', author = '{$post_author}', date = {$post_date}, tags = '{$post_tags}', content = '{$post_content}' ";
    }

    $query .= "WHERE id = {$id}";
    if (!$update_post_query = mysqli_query($connection, $query)) {
        die(mysqli_error($connection));
    }
}

//comments

function insertComment($id)
{
    global $connection;
    if (isset($_POST['add_comment'])) {
        $comment_post = $id;
        $comment_author = $_POST['author'];
        $comment_email = $_POST['email'];
        $comment_content = $_POST['content'];
        $comment_date = date("Y-m-d H:i:s");
        $comment_status = "unapproved";
        $query = "INSERT INTO comments(post_id, author, email, content, status, date) ";
        $query .= "VALUES('{$comment_post}', '{$comment_author}', '{$comment_email}', '{$comment_content}', '{$comment_status}', '{$comment_date}')";
        $insert_comment_query = mysqli_query($connection, $query);
        // if ($insert_comment_query) {
        //     header('Location: index.php');
        // }
    }
}

function getAllComments()
{
    global $connection;
    $query = 'SELECT * FROM comments';
    $select_all_comments_query = mysqli_query($connection, $query);
    return $select_all_comments_query;
}

function getCommentById($id)
{
    global $connection;
    $query = "SELECT * FROM comments WHERE id = {$id}";
    $select_post_by_id_query = mysqli_query($connection, $query);
    return mysqli_fetch_assoc($select_post_by_id_query);
}

function getCommentByPost($id)
{
    global $connection;
    $query = "SELECT * FROM comments WHERE post_id = $id AND status = 'approved'";
    // var_dump(mysqli_query($connection, $query));
    return mysqli_query($connection, $query);
}

function updateComment($id)
{
    global $connection;
    $comment_author = $_POST['author'];
    $comment_content = $_POST['content'];
    $query = "UPDATE comments ";
    $query .= "SET author = '{$comment_author}', content = '{$comment_content}' ";
    $query .= "WHERE id = {$id}";
    if (!$update_comment_query = mysqli_query($connection, $query)) {
        die(mysqli_error($connection));
    }
}

function approveComment($id)
{
    global $connection;
    $query = "UPDATE comments ";
    $query .= "SET status = 'approved' ";
    $query .= "WHERE id = {$id}";
    if (!$update_comment_query = mysqli_query($connection, $query)) {
        die(mysqli_error($connection));
    }
}

function unapproveComment($id)
{
    global $connection;
    $query = "UPDATE comments ";
    $query .= "SET status = 'unapproved' ";
    $query .= "WHERE id = {$id}";
    if (!$update_comment_query = mysqli_query($connection, $query)) {
        die(mysqli_error($connection));
    }
}

function deleteComment($id)
{
    global $connection;
    $query = "DELETE from comments WHERE id = $id";
    $delete_commenty_query = mysqli_query($connection, $query);
    header('Location: index.php');
}


//USERS

function getAllUsers()
{
    global $connection;
    $query = 'SELECT * FROM users';
    $select_all_users_query = mysqli_query($connection, $query);
    return $select_all_users_query;
}

function addUser()
{
    global $connection;
    $username = $_POST['username'];
    $password = $_POST['password'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $avatar_img = $_FILES['avatar']['name'];
    $avatar_img_tmp = $_FILES['avatar']['tmp_name'];
    $role = $_POST['role'];
    $query = "INSERT INTO users(username, password, firstname, lastname, email, avatar, role) ";
    $query .= "VALUES('{$username}', '{$password}', '{$firstname}', '{$lastname}', '{$email}', '{$avatar_img}', '{$role}')";
    move_uploaded_file($avatar_img_tmp, __DIR__ . "/../images/users/$avatar_img");
    mysqli_query($connection, $query);
    header('Location: index.php');
}

function editUser($id)
{
    global $connection;
    $username = $_POST['username'];
    $password = $_POST['password'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $role = $_POST['role'];
    $query = "UPDATE users ";
    if (isset($_FILES['avatar']['error']) && $_FILES['avatar']['name'] != '') {
        $avatar_img = $_FILES['avatar']['name'];
        $avatar_img_tmp = $_FILES['avatar']['tmp_name'];
        $query .= "SET username = '{$username}', password = '{$password}', firstname = '{$firstname}', lastname = '{$lastname}', email = '{$email}', avatar = '{$avatar_img}', role = '{$role}' ";
        move_uploaded_file($avatar_img_tmp, __DIR__ . "/../images/users/$avatar_img");
    } else {
        $query .= "SET username = '{$username}', password = '{$password}', firstname = '{$firstname}', lastname = '{$lastname}', email = '{$email}', role = '{$role}' ";
    }
    $query .= "WHERE id = {$id}";
    if (!$update_comment_query = mysqli_query($connection, $query)) {
        die(mysqli_error($connection));
    }
}

function deleteUser($id)
{
    global $connection;
    $query = "DELETE from users WHERE id = $id";
    $delete_user_query = mysqli_query($connection, $query);
}

function getUserById($id)
{
    global $connection;
    $query = "SELECT * FROM users WHERE id = $id";
    return mysqli_fetch_assoc(mysqli_query($connection, $query));
}

function logInUser($username, $password)
{
    global $connection;
    $username = mysqli_real_escape_string($connection, $username);
    $password = mysqli_real_escape_string($connection, $password);
    $query = "SELECT * FROM users WHERE username = '{$username}' AND password = '{$password}'";
    $request = mysqli_query($connection, $query);
    if (!$request) {
        return NULL;
    } else {
        $user =  mysqli_fetch_assoc($request);
        if ($user != NULL) {
            $_SESSION['id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['role'] = $user['role'];
            header('refresh:3, url=index.php');
            return $user;
        }
    }
}

function logOutUser()
{
    session_unset();
}
