<div class="content w-100 px-2">
    <form method="post" enctype="multipart/form-data" action="index.php">
        <div class="row w-100">
            <div class="col-6">

                <div class="form-group">
                </div>
                <div class="form-group">
                    <label for="">Username</label>
                    <input type="text" class="form-control" name="username" id="">
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" class="form-control" name="password" id="">
                </div>
                <div class="form-group">
                    <label for="">First name</label>
                    <input type="text" class="form-control" name="firstname" id="">
                </div>
                <div class="form-group">
                    <label for="">Last name</label>
                    <input type="text" class="form-control" name="lastname" id="">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" name="email" class="form-control" id="">
                </div>
                <div class="form-group">
                    <label for="">Role</label>
                    <select multiple name="role" class="form-control" id="">
                        <option value="admin">Admin</option>
                        <option value="user">User</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Image</label>
                    <input type="file" name="avatar" class="form-control" id="">
                </div>
                <div class="form-group text-center">
                    <input type="submit" class="form-control btn btn-dark w-50" name="add_user" value="Add user">
                </div>
            </div>
        </div>
    </form>
</div>