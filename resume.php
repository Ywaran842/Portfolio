<?php
include './libs/load.php'; 
?>
<!DOCTYPE html>
<html lang="en">
    <?php load_template('_head');?>
    <body class="d-flex flex-column h-100 bg-light">
        <main class="flex-shrink-0">
            <!-- Navigation-->
            <?php load_template('_nav');?>
            <!-- Page Content-->
            <?php load_template('_resume/_content'); ?>
        </main>
        <!-- Footer-->
       <?php load_template('_footer');?>
        <?php load_template('_script');?>\
        <script>
        // Update progress bar height based on scroll position
        window.addEventListener('scroll', function() {
            var scrollPosition = window.scrollY;
            var windowHeight = window.innerHeight;
            var documentHeight = document.documentElement.scrollHeight;
            var progressBarHeight = (scrollPosition / (documentHeight - windowHeight)) * 100;
            document.querySelector('.progress-bar').style.height = progressBarHeight + '%';
        });
    </script>
    </body>
</html>