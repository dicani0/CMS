<?php
include __DIR__ . '\..\includes\header.php';
?>
<div class="wrapper">
    <?php
    include __DIR__ . '\..\includes\sidebar.php';
    include __DIR__ . '\..\includes\data\posts\routing.php';
    ?>
</div>
<?php
include __DIR__ . '\..\includes\footer.php';
?>
<script>
    ClassicEditor
        .create(document.querySelector('#editor'))
        .catch(error => {
            console.error(error);
        });
</script>