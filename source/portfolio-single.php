<!DOCTYPE html>
<html lang="en">

<?php require_once('partials/head.php'); ?>

<body>

    <?php require_once('partials/navigation.php'); ?>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <h1 class="mt-4 mb-3">Portfolio Item
            <small>Subheading</small>
        </h1>

        <?php $page = 'portfolio-single'; ?>
        <?php require_once('partials/breadcrumb.php'); ?>

        <!-- Portfolio Item Row -->
        <div class="row">

            <div class="col-md-8">
                <img class="img-fluid" src="<?php echo $faker->imageUrl(750, 500, 'business'); ?>" alt="<?php echo $faker->sentence(5, true); ?>">
            </div>

            <div class="col-md-4">
                <h3 class="my-3">Project Description</h3>
                <p><?php echo $faker->paragraph(5, true); ?></p>
                <h3 class="my-3">Project Details</h3>
                <ul>
                    <li><?php echo ucfirst($faker->words(rand(1,3), true)); ?></li>
                    <li><?php echo ucfirst($faker->words(rand(1,3), true)); ?></li>
                    <li><?php echo ucfirst($faker->words(rand(1,3), true)); ?></li>
                    <li><?php echo ucfirst($faker->words(rand(1,3), true)); ?></li>
                </ul>
            </div>

        </div>
        <!-- /.row -->

        <!-- Related Projects Row -->
        <h3 class="my-4">Related Projects</h3>

        <div class="row">

            <?php for($i=1; $i<=4; $i++) { ?>
            <div class="col-md-3 col-sm-6 mb-4">
                <a href="#">
                    <img class="img-fluid" src="<?php echo $faker->imageUrl(500, 300, 'business'); ?>" alt="<?php echo $faker->sentence(5, true); ?>">
                </a>
            </div>
            <?php } ?>

        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->

    <?php require_once('partials/footer.php'); ?>

</body>

</html>
