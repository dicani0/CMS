<div class="content p-2 w-100">
      
      <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est doloremque unde debitis dolor iste iure, cupiditate neque beatae dolorem ad molestiae, distinctio, adipisci fugiat ipsum accusantium expedita similique! Voluptatibus, ipsum.</p> -->
      <div class="container-fluid">
            <?php
                $query = 'SELECT * FROM posts';
                $select_all_posts_query = mysqli_query($connection, $query);
                while ($row = mysqli_fetch_assoc($select_all_posts_query)) {
                    $category_id = $row['category_id'];
                    $title = $row['title'];
                    $author = $row['author'];
                    $date = $row['date'];
                    $image = $row['image'];
                    $content =  $row['content'];
                    $tags = $row['tags'];
            ?>
            
            <div class="jumbotron p-4 text-dark">
                <h1 class="display-4"><?php echo $title; ?></h1>
                <hr>
                <div class="p-1"> by  <a href="#"><?php echo $author;?></a></div>
                <div class="p-1 mb-3"><i class="far fa-clock"></i> <?php echo " " . $date; ?></div>
                <img src="" alt="Photo" class="img-thumbnail mb-3">
                <p class="lead"><?php echo $content; ?></p>
                <hr>
                <small><?php echo $tags ?></small>
            </div>

            <?php
                }
            ?>
        

        
      </div>
    </div>