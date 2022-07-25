<?php
$pageNo = $_GET['page'] ?? 1;
$currentPage = basename($_SERVER['PHP_SELF']);
echo "Page No : $pageNo <br>";
?>
<a href="<?= $currentPage . "?page=1" ?>">
    <button>1</button>
</a>
<a href="<?= $currentPage . "?page=2" ?>">
    <button>2</button>
</a>
<a href="<?= $currentPage . "?page=3" ?>">
    <button>3</button>
</a>
<a href="<?= $currentPage . "?page=4" ?>">
    <button>4</button>
</a>
<a href="<?= $currentPage . "?page=5" ?>">
    <button>5</button>
</a>