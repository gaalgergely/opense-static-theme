<!DOCTYPE html>
<html lang="en">

<?php require_once('partials/head.php'); ?>

<body>

    <?php require_once('partials/navigation.php'); ?>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <h1 class="mt-4 mb-3">Full Width
            <small>Subheading</small>
        </h1>

        <?php $page = 'full-width'; ?>
        <?php require_once('partials/breadcrumb.php'); ?>

        <?php 
        
        $paragraphs = $faker->paragraphs(rand(5, 8), false);
 
        foreach($paragraphs as $paragraph){
            echo "<p>$paragraph</p>";    
        }
        
        ?>

    </div>
    <!-- /.container -->

    <?php require_once('partials/footer.php'); ?>

</body>

</html>
