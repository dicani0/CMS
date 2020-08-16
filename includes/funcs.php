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
?>