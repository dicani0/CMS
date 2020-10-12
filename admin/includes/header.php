<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="/cms/css/facss/all.css">
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="/cms/bootstrap/css/bootstrap.min.css">
    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="/cms/css/main.css">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/23.0.0/classic/ckeditor.js"></script>
    <title>Document</title>
</head>

<body>
    <?php
    session_start();
    ob_start();
    include __DIR__ . '/../../components/db.php';
    include __DIR__ . '/../../components/funcs.php';
    include 'navigation.php';
    ?>