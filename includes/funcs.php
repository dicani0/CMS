<?php 

    function insertCategory() {
        global $connection;
        if(isset($_POST['submit'])) {
            $category_name = $_POST['name'];
            if($category_name == "" || empty($category_name)) {
                echo "Category name cannot be empty";
            }
            else {
                $query = "INSERT INTO categories(name) ";
                $query .= "VALUE('{$category_name}')";
                $add_category_query = mysqli_query($connection, $query);
    
                if(!$add_category_query) {
                    die("Query failed" . mysqli_error($connection));
                }
            }
        }
    }

    function deleteCategory() {
        global $connection;
        if (isset($_GET['deletecategory'])) {
            $query = "DELETE from categories WHERE id = {$_GET['deletecategory']}";
            $delete_category_query = mysqli_query($connection, $query);
        }
    }

    function editCategory() {
        global $connection;
        if(isset($_GET['editcategory'])) {
            $query = "SELECT * from categories WHERE id = {$_GET['editcategory']}";
            $select_category_by_id_query = mysqli_query($connection, $query);
            while ($row = mysqli_fetch_assoc($select_category_by_id_query)) {
                $category_id = $row['id'];
                $category_name = $row['name'];
            }
            if(isset($_POST['update'])) {
                $category_name = $_POST['name'];
                if($category_name == '' || empty($category_name)) {
                    echo 'Name field cannot be empty';
                }
                else{
                    $query = "UPDATE categories SET name = '{$category_name}' WHERE id = {$category_id}";
                    $update_category_query = mysqli_query($connection, $query);
                }
            }
        }
    }

    function getAllCategories() {
        global $connection;
        $query = 'SELECT * FROM categories';
        $select_all_categories_query = mysqli_query($connection, $query);
        return $select_all_categories_query;
    }

    function getCategoryById() {
        global $connection;
        if(isset($_GET['editcategory'])) {
            $query = "SELECT * from categories WHERE id = {$_GET['editcategory']}";
            $select_category_by_id_query = mysqli_query($connection, $query);
            while ($row = mysqli_fetch_assoc($select_category_by_id_query)) {
                $category['id'] = $row['id'];
                $category['name'] = $row['name'];
            }
            return $category;
        }
    }
    // POSTS

    function getAllPosts() {
        global $connection;
        $query = 'SELECT * FROM posts';
        $select_all_posts_query = mysqli_query($connection, $query);
        return $select_all_posts_query;
    }

    function getPostById($id) {
        global $connection;
        $query = "SELECT * FROM posts WHERE id = {$id}";
        $select_post_by_id_query = mysqli_query($connection, $query);
        return mysqli_fetch_assoc($select_post_by_id_query);
    }

    function insertPost() {
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
        }
    }

    function deletePost($id) {
        global $connection;
        $query = "DELETE from posts WHERE id = {$id}";
        $delete_post_query = mysqli_query($connection, $query);
        return $delete_post_query;
    }

    function updatePost($id) {
        global $connection;
        $post_category = $_POST['category'];
        $post_title = $_POST['title'];
        $post_author = $_POST['author'];
        $post_date = date('d-m-y');
        $post_tags = $_POST['tags'];
        $post_content = $_POST['content'];
        $post_image = $_FILES['image']['name'];
        $post_image_tmp = $_FILES['image']['tmp_name'];
        $post_comment_count = 5;
        $query = "UPDATE posts ";
        $query .= "SET category_id = '{$post_category}', title = '{$post_title}', author = '{$post_author}', date = {$post_date}, tags = '{$post_tags}', content = '{$post_content}', image = '{$post_image}' ";
        $query .= "WHERE id = {$id}";
        if(!$update_post_query = mysqli_query($connection, $query)) {
            die(mysqli_error($connection));
        }
        move_uploaded_file($post_image_tmp, "C:/xampp/htdocs/CMS/images/$post_image");           
    }
?>