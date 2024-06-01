<?php 
include 'libs/load.php';
?>

<!DOCTYPE html>
<html lang="en">
    <?php load_template('_head'); ?>
    <body class="d-flex flex-column h-100 bg-light">
        <main class="flex-shrink-0">
            <!-- Navigation-->
            <?php load_template('_nav'); ?>
            <!-- Projects Section-->
            <?php load_template('_project/_projects');?>
            <!-- Call to action section-->
            <?php load_template('_project/_contact'); ?>
        </main>
        <!-- Footer-->
        <?php load_template('_footer'); ?>
        <?php load_template('_script'); ?>
    </body>
</html>