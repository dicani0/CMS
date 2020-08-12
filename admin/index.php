<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/main.css">
    <title>Document</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-2">
    <a class="text-light" class="text-light" href="#" class="navbar-brand">CMS</a>
    
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item">
          <a href="" class="nav-link">Home</a>
        </li>
        <li class="nav-item">
          <a href="" class="nav-link">Home</a>
        </li>
        <li class="nav-item">
          <a href="" class="nav-link">Home</a>
        </li>
        <li class="nav-item">
          <a href="" class="nav-link">Home</a>
      </ul>
    </div>
  </nav>
  <div class="wrapper">
    <nav id="sidebar" class="sidebar bg-primary p-2">
      <ul class="list-unstyled component text-light">
        <p class="mb-1 h4">Sidebar</p>
        <li class="active mb-1">
          <a href="#categories" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle text-light">Categories</a>
          <ul class="collapse list-unstyled" id="categories">
            <li>
              <a class="text-light" href="#">1st link</a>
            </li>
            <li>
              <a class="text-light" href="#">2nd link</a>
            </li>
            <li>
              <a class="text-light" href="#">3rd link</a>
            </li>
          </ul>
          <li>
          <a href="#posts" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle text-light">Posts</a>
            <ul class="collapse list-unstyled" id="posts">
              <li><a class="text-light" href="#">Add</a></li>
              <li><a class="text-light" href="#">Remove</a></li>
            </ul>
          </li>
        </li>
      </ul>
    </nav>
    <div class="content p-2">
      <button type="button" id="sidebarCollapse" class="btn btn-info">
        <i class="fas fa-align-left"></i>
        <span>Toggle Sidebar</span>
      </button>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est doloremque unde debitis dolor iste iure, cupiditate neque beatae dolorem ad molestiae, distinctio, adipisci fugiat ipsum accusantium expedita similique! Voluptatibus, ipsum.</p>
      <div class="container-fluid">

        

      </div>
    </div>
  </div>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script>
      $(document).ready(function (){
        $('#sidebarCollapse').on('click', function () {
          $('#sidebar').toggleClass('active');
        });
      });
    </script>
</body>
</html>