<?php
include __DIR__ . '\includes\header.php';
?>
<div class="wrapper">
    <?php
    include __DIR__ . '\includes\sidebar.php';
    $posts = getAllPosts();
    $categories = getAllCategories();
    $comments = getAllComments();
    $unapprovedComments = getUnapprovedComments();
    $approvedComments = getApprovedComments();
    $users = getAllUsers();
    ?>
    <div class="d-flex flex-column w-100">
        <div class="row mx-1 w-100">
            <div class="card-deck w-100 m-4" style="max-height: 300px;">
                <div class="card bg-dark text-white">
                    <div class="card-header">
                        <h5 class="card-title">Categories</h5>
                    </div>
                    <div class="card-body d-flex justify-content-center align-items-center">
                        <p class="card-text">
                            <h1><?= mysqli_num_rows($categories); ?></h1>
                        </p>
                    </div>
                    <div class="card-footer">
                        <a class="d-flex justify-content-between align-items-center text-white" href="./categories">View details <span class="float-right"><i class="fas fa-angle-double-right"></i></span></a>
                    </div>
                </div>
                <div class="card bg-dark text-white">
                    <div class="card-header">
                        <h5 class="card-title">Posts</h5>
                    </div>
                    <div class="card-body d-flex justify-content-center align-items-center">
                        <p class="card-text">
                            <h1><?= mysqli_num_rows($posts); ?></h1>
                        </p>
                    </div>
                    <div class="card-footer">
                        <a class="d-flex justify-content-between align-items-center text-white" href="./posts">View details <span class="float-right"><i class="fas fa-angle-double-right"></i></span></a>
                    </div>
                </div>
                <div class="card bg-dark text-white">
                    <div class="card-header">
                        <h5 class="card-title">Comments</h5>
                    </div>
                    <div class="card-body d-flex justify-content-center align-items-center">
                        <p class="card-text">
                            <h1><?= mysqli_num_rows($comments); ?></h1>
                        </p>
                    </div>
                    <div class="card-footer">
                        <a class="d-flex justify-content-between align-items-center text-white" href="./comments">View details <span class="float-right"><i class="fas fa-angle-double-right"></i></span></a>
                    </div>
                </div>
                <div class="card bg-dark text-white">
                    <div class="card-header">
                        <h5 class="card-title">Users</h5>
                    </div>
                    <div class="card-body d-flex justify-content-center align-items-center">
                        <p class="card-text">
                            <h1><?= mysqli_num_rows($users); ?></h1>
                        </p>
                    </div>
                    <div class="card-footer">
                        <a class="d-flex justify-content-between align-items-center text-white" href="./users">View details <span class="float-right"><i class="fas fa-angle-double-right"></i></span></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mx-auto">
            <div id="columnchart_material" style="width: 900px; height: 500px;"></div>
        </div>
    </div>


</div>
<?php
include __DIR__ . '\includes\footer.php';
?>
<script type="text/javascript">
    google.charts.load('current', {
        'packages': ['bar']
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Data', 'Amount', {
                role: 'style'
            }, {
                role: 'annotation'
            }],
            ['Posts', <?= mysqli_num_rows($posts) ?>, 'blue', 'test'],
            ['Categories', <?= mysqli_num_rows($categories) ?>, 'blue', 'test'],
            ['Comments', <?= mysqli_num_rows($comments) ?>, 'blue', 'test'],
            ['Approved Comments', <?= mysqli_num_rows($approvedComments) ?>, 'color: green', 'test'],
            ['Unpproved Comments', <?= mysqli_num_rows($unapprovedComments) ?>, '#ff0000', 'test'],
            ['Users', <?= mysqli_num_rows($users) ?>, 'blue', 'test']

        ]);

        var options = {
            chart: {
                title: '',
                subtitle: '',
            }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
    }
</script>