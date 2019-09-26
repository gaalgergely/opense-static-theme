<!DOCTYPE html>
<html lang="en">

<?php require_once('partials/head.php'); ?>

<body>

    <?php require_once('partials/navigation.php'); ?>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <h1 class="mt-4 mb-3">Blog Home Two
            <small>Subheading</small>
        </h1>

        <?php $page = 'blog-home-2'; ?>
        <?php require_once('partials/breadcrumb.php'); ?>

        <?php for($i=1; $i<=4; $i++){ ?>
        <!-- Blog Post -->
        <div class="card mb-4">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        <a href="#">
                            <img class="img-fluid rounded" src="<?php echo $faker->imageUrl(750, 300, 'business'); ?>" alt="<?php echo $faker->sentence(5, true); ?>">
                        </a>
                    </div>
                    <div class="col-lg-6">
                        <h2 class="card-title"><?php echo ucfirst($faker->words(rand(2, 4), true)); ?></h2>
                        <p class="card-text"><?php echo $faker->sentence(rand(5, 7), true); ?></p>
                        <a href="blog-post.html" class="btn btn-primary"><?php echo ucfirst($faker->words(rand(2, 4), true)); ?> →</a>
                    </div>
                </div>
            </div>
            <div class="card-footer text-muted">
                Posted on <?php $faker->dateTime($max = 'now'); ?> by
                <a href="#"><?php echo $faker->name; ?></a>
            </div>
        </div>
        <?php } ?>

        <?php require_once('partials/blog/pagination.php'); ?>
        
    </div>
    <!-- /.container -->

    <?php require_once('partials/footer.php'); ?>

</body>

</html>
