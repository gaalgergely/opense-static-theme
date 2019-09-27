<!DOCTYPE html>
<html lang="en">

<?php require_once('partials/head.php'); ?>

<body>

    <?php require_once('partials/navigation.php'); ?>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <h1 class="mt-4 mb-3">FAQ
            <small>Subheading</small>
        </h1>

        <?php $page = 'faq'; ?>
        <?php require_once('partials/breadcrumb.php'); ?>

        <div class="mb-4" id="accordion" role="tablist" aria-multiselectable="true">
            <?php for($i=1; $i<=3; $i++){ ?>
            <div class="card">
                <div class="card-header" role="tab" id="heading<?php echo $i; ?>">
                    <h5 class="mb-0">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $i; ?>" aria-expanded="<?php if($i==1) echo 'true'; else echo 'false'; ?>" aria-controls="collapse<?php echo $i; ?>">Collapsible Group Item #<?php echo $i; ?></a>
                    </h5>
                </div>

                <div id="collapse<?php echo $i; ?>" class="collapse <?php if($i==1) echo 'show'; ?>" role="tabpanel" aria-labelledby="heading<?php echo $i; ?>">
                    <div class="card-body">
                        <?php echo $faker->paragraphs(rand(5, 8), true); ?>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>

    </div>
    <!-- /.container -->

    <?php require_once('partials/footer.php'); ?>

</body>

</html>
