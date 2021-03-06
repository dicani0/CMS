<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="/cms/vendor/components/font-awesome/css/all.css">
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="/cms/vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
    <script src="https://cdn.ckeditor.com/ckeditor5/23.0.0/classic/ckeditor.js"></script>
    <script src="./vendor/components/jquery/jquery.min.js"></script>
    <script src="./vendor/twbs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./js/scripts.js"></script>
    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="/cms/css/main.css">
    <title>Document</title>
</head>

<body>
    <?php
    session_start();
    include __DIR__ . '/db.php';
    include __DIR__ . '/funcs.php';
    registerUserOnline();
    ?>