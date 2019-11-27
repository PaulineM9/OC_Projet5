<?php if (isset($_SESSION['flash'])): ?>
    <?php foreach ($_SESSION['flash'] as $key => $value): ?>
        <p class="flash_message succes danger"><?= $value ?></p>
    <?php endforeach; ?>
    <?php endif;
unset($_SESSION['flash']);
?>