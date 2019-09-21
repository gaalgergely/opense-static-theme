<?php 
    require_once dirname(__FILE__) . '/../../vendor/autoload.php'; 
    $faker = Faker\Factory::create();
    $client = new \GuzzleHttp\Client();

    define('BRAND', 'Opense');
?>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo BRAND; ?> - Bootstrap Template</title>

    <link href="assets/style.css" rel="stylesheet">

</head>