<!DOCTYPE html>
<html lang="en">

<?php require_once('partials/head.php'); ?>

<body>

    <?php require_once('partials/navigation.php'); ?>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <h1 class="mt-4 mb-3">Pricing
            <small>Subheading</small>
        </h1>

        <?php $page = 'pricing'; ?>
        <?php require_once('partials/breadcrumb.php'); ?>
        
        <!-- Content Row -->
        <div class="row">
            <div class="col-lg-4 mb-4">
                <div class="card h-100">
                    <h3 class="card-header">Basic</h3>
                    <div class="card-body">
                        <div class="display-4">$19.99</div>
                        <div class="font-italic">per month</div>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Cras justo odio</li>
                        <li class="list-group-item">Dapibus ac facilisis in</li>
                        <li class="list-group-item">Vestibulum at eros</li>
                        <li class="list-group-item">
                            <a href="#" class="btn btn-primary">Sign Up!</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card card-outline-primary h-100">
                    <h3 class="card-header bg-primary text-white">Plus</h3>
                    <div class="card-body">
                        <div class="display-4">$39.99</div>
                        <div class="font-italic">per month</div>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Cras justo odio</li>
                        <li class="list-group-item">Dapibus ac facilisis in</li>
                        <li class="list-group-item">Vestibulum at eros</li>
                        <li class="list-group-item">
                            <a href="#" class="btn btn-primary">Sign Up!</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card h-100">
                    <h3 class="card-header">Ultra</h3>
                    <div class="card-body">
                        <div class="display-4">$159.99</div>
                        <div class="font-italic">per month</div>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Cras justo odio</li>
                        <li class="list-group-item">Dapibus ac facilisis in</li>
                        <li class="list-group-item">Vestibulum at eros</li>
                        <li class="list-group-item">
                            <a href="#" class="btn btn-primary">Sign Up!</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->

    <?php require_once('partials/footer.php'); ?>

</body>

</html>
