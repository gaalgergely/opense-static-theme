<!-- Search Widget -->
<div class="card mb-4">
    <h5 class="card-header">Search</h5>
    <div class="card-body">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Search for...">
            <span class="input-group-btn">
                <button class="btn btn-secondary" type="button">Go!</button>
            </span>
        </div>
    </div>
</div>

<!-- Categories Widget -->
<div class="card my-4">
    <h5 class="card-header">Categories</h5>
    <div class="card-body">
        <div class="row">
            <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                    <li>
                        <a href="#"><?php echo ucfirst($faker->words(rand(1, 2), true)); ?></a>
                    </li>
                    <li>
                        <a href="#"><?php echo ucfirst($faker->words(rand(1, 2), true)); ?></a>
                    </li>
                    <li>
                        <a href="#"><?php echo ucfirst($faker->words(rand(1, 2), true)); ?></a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                    <li>
                        <a href="#"><?php echo ucfirst($faker->words(rand(1, 2), true)); ?></a>
                    </li>
                    <li>
                        <a href="#"><?php echo ucfirst($faker->words(rand(1, 2), true)); ?></a>
                    </li>
                    <li>
                        <a href="#"><?php echo ucfirst($faker->words(rand(1, 2), true)); ?></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- Side Widget -->
<div class="card my-4">
    <h5 class="card-header">Side Widget</h5>
    <div class="card-body">
        <?php echo $faker->sentence(3, true); ?>
    </div>
</div>