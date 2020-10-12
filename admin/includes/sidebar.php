<nav id="sidebar" class="sidebar bg-dark p-2">
  <ul class="list-unstyled component text-light">
    <li class="active mb-1 border-bottom py-2">
      <a href="/cms/admin" class="text-light text-uppercase font-weight-bold d-block">Dashboard</a>
    </li>
    <li href="#categories" class="active mb-1 border-bottom py-2">
      <a href="#categories" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle text-light text-uppercase font-weight-bold d-block"><i class="fas fa-align-justify mr-2"></i>Categories</a>
      <ul class="collapse list-unstyled pl-2" id="categories">
        <li>
          <a class="text-light" href="/cms/admin/categories">View all categories</a>
        </li>
        <li>
          <a class="text-light" href="#">3rd link</a>
        </li>
      </ul>
    </li>
    <li class="border-bottom py-2">
      <a href="#posts" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle text-light text-uppercase font-weight-bold d-block"><i class="fab fa-blogger mr-2"></i>Posts</a>
      <ul class="collapse list-unstyled pl-2" id="posts">
        <li><a class="text-light d-block" href="/cms/admin/posts/">View all posts</a></li>
        <li><a class="text-light d-block" href="/cms/admin/posts/index.php?action=addpost">Add post</a></li>
      </ul>
    </li>
    <li class="border-bottom py-2">
      <a href="#comments" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle text-light text-uppercase font-weight-bold d-block"><i class="fas fa-comments mr-2"></i>Comments</a>
      <ul class="collapse list-unstyled pl-2" id="comments">
        <li><a class="text-light d-block" href="/cms/admin/comments/">View all comments</a></li>
      </ul>
    </li>
    <li class="border-bottom py-2">
      <a href="#users" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle text-light text-uppercase font-weight-bold d-block"><i class="fas fa-users mr-2"></i>Users</a>
      <ul class="collapse list-unstyled pl-2" id="users">
        <li><a class="text-light d-block" href="/cms/admin/users/">View all users</a></li>
        <li><a class="text-light d-block" href="/cms/admin/users/index.php?action=adduser">Add user</a></li>
        <?php if (isset($_SESSION['role'])) : ?>
          <li><a class="text-light d-block" href="/cms/admin/users/index.php?action=profile">Profile</a></li>
        <?php endif; ?>
      </ul>
    </li>
  </ul>
</nav>