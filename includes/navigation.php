<nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-2">
    <button type="button" id="sidebarCollapse" class="btn btn-outline-dark mr-3">
      <i class="fas fa-align-left"></i>
      <span>Toggle Sidebar</span>
    </button>
    <a class="text-light" class="text-light" href="/cms/admin" class="navbar-brand">CMS</a>
    
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <?php
            $query = 'SELECT * FROM categories';
            $select_all_categories_query = mysqli_query($connection, $query);

            while ($row = mysqli_fetch_assoc($select_all_categories_query)) {
                echo '<li class="nav-item">
                <a href="" class="nav-link">' . $row['name'] . '</a>
                </li>';
            }
        ?>
      </ul>
    </div>
  </nav>