<!DOCTYPE html>
<html lang="en">

<?php require_once('partials/head.php'); ?>

<body>

    <?php require_once('partials/navigation.php'); ?>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <h1 class="mt-4 mb-3">Services
            <small>Subheading</small>
        </h1>

        <?php $page = 'services'; ?>
        <?php require_once('partials/breadcrumb.php'); ?>

        <!-- Image Header -->
        <img class="img-fluid rounded mb-4" src="<?php echo $faker->imageUrl(1200, 300, 'business'); ?>" alt="<?php echo $faker->sentence(5, true); ?>">

        <!-- Marketing Icons Section -->
        <div class="row">
            <?php for($i=1; $i<=3; $i++){ ?>
            <div class="col-lg-4 mb-4">
                <div class="card h-100">
                    <h4 class="card-header"><?php echo ucfirst($faker->words(2, true)); ?></h4>
                    <div class="card-body">
                        <p class="card-text"><?php echo $faker->sentences(2, true); ?></p>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="btn btn-primary"><?php echo ucfirst($faker->words(2, true)); ?></a>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->

    <?php require_once('partials/footer.php'); ?>

</body>

</html>
