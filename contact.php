<?php include 'libs/load.php'; ?>
<!DOCTYPE html>
<html lang="en">
    <?php load_template('_head'); ?>
    <body class="d-flex flex-column">
        <main class="flex-shrink-0">
            <!-- Navigation-->
            <?php load_template('_nav');?>
            <!-- Page content-->
            <?php load_template('_contact/_form');?>
        </main>
        <!-- Footer-->
        <?php load_template('_footer');?>
        <!-- Bootstrap core JS-->
        <?php load_template('_script') ?>
    </body>
</html>
