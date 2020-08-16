<div class="content p-2 w-100">
      
    <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est doloremque unde debitis dolor iste iure, cupiditate neque beatae dolorem ad molestiae, distinctio, adipisci fugiat ipsum accusantium expedita similique! Voluptatibus, ipsum.</p> -->
    <div class="container-fluid">
        <?php
            if (isset($_GET['action'])) {
                switch ($_GET['action']) {
                    case 'categories':
                        include 'data/categories.php';
                        break;
                    
                    default:
                        include 'data/posts.php';
                        break;
                }
            }
            else {
                include 'data/posts.php';
            }
        ?>
    </div>
</div>