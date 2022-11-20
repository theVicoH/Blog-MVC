<?php


foreach ($User as $user) { ?>
    <div>
        <?php echo $user->getUsername(); ?>
        <?php echo $user->getId(); ?>
    </div>
<?php
}
?>