<?php
    include './libs/load.php';
?>
<!DOCTYPE html>
<html lang="en">
    <?php load_template('_head'); ?>
    <body class="d-flex flex-column h-100">
        <main class="flex-shrink-0">
            <!-- Navigation-->
            <?php load_template('_nav');?>
            <!-- Header-->
            <?php load_template('_index/_header'); ?>
            <!-- About Section-->
            <?php  load_template('_index/_about') ?>
        </main>
        <!-- Footer-->
        <?php load_template('_footer'); ?>
        <?php load_template('_script'); ?>
    </body>
</html>