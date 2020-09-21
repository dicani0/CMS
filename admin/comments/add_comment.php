<div class="container bg-dark text-light">
    <form method="post" action="index.php">
        <div class="row">
            <div class="col-6">
                <label for="Post">Post</label>
                <input type="text" name="post" class="form-control">
                <label for="Author">Author</label>
                <input type="text" name="author" class="form-control">
                <label for="Email">Email</label>
                <input type="text" name="email" class="form-control">
            </div>
            <div class="col-6">
                <label for="Comment">Comment</label>
                <textarea name="content" class="form-control" id="" cols="30" rows="7"></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center mt-4">
                <input type="submit" class="btn btn-primary w-25" name="add_comment" value="Add">
            </div>
        </div>
    </form>
</div>