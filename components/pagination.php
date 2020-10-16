<!-- Pagination -->
<ul class="pagination justify-content-center mb-4">
    <li class="page-item <?= ($page == 1) ? 'disabled' : '' ?>">
        <a class="page-link" href="?page=<?= $page - 1 ?>">&larr; Previous Page</a>
    </li>
    <li class="page-item <?= ($nextPagePosts == NULL) ? 'disabled' : '' ?>">
        <a class="page-link" href="?page=<?= $page + 1 ?>">Next Page &rarr;</a>
    </li>
</ul>