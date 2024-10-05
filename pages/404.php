<?php
$page = isset($_GET['page']) ? $_GET['page'] : 'home';

include_once __DIR__ . '/../config/config.php';

include_once __DIR__ . '/../components/head.php';
renderHead($page);

include_once __DIR__ . '/../components/navbar.php';
include_once __DIR__ . '/../components/all_headers_desc.php';

?>

<div class="content">
    404
</div>

<?php
include_once __DIR__ . '/../components/footer.php';
?>