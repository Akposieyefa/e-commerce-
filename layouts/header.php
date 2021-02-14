<?php
 
 require 'vendor/autoload.php';

    use app\lib\Session;
    use app\lib\DB;
    use app\lib\Format;
    use app\core\Product;
    use app\core\Category;
    use app\core\Customer;
    use app\core\Cart;

   $session = new Session;
   $session::init();

    $db   =   new DB();
    $fm   =   new Format();
    $pd   =   new Product();
    $ct   =   new Cart();
    $cat  =  new Category();
    $cmr  =  new Customer();
    // $cnt  =  new Contact();
    // $ph   =   new Pharmacy();
 ?>
<?php
  header("Cache-Control: no-cache, must-revalidate");
  header("Pragma: no-cache");
  header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
  header("Cache-Control: max-age=2592000");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="icon" href="img/favicon.png" type="image/png" />
    <title>MedicPlaza</title>
    <link rel="stylesheet" href="../layouts/css/bootstrap.css" />
    <link rel="stylesheet" href="../layouts/vendors/linericon/style.css" />
    <link rel="stylesheet" href="../layouts/css/font-awesome.min.css" />
    <link rel="stylesheet" href="../layouts/css/themify-icons.css" />
    <link rel="stylesheet" href="../layouts/css/flaticon.css" />
    <link rel="stylesheet" href="../layouts/vendors/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="../layouts/vendors/lightbox/simpleLightbox.css" />
    <link rel="stylesheet" href="../layouts/../layouts/vendors/nice-select/css/nice-select.css" />
    <link rel="stylesheet" href="../layouts/vendors/animate-css/animate.css" />
    <link rel="stylesheet" href="../layouts/vendors/jquery-ui/jquery-ui.css" />
    <link rel="stylesheet" href="../layouts/css/style.css" />
    <link rel="stylesheet" href="../layouts/css/responsive.css" />
    <link rel='icon' href="img/b1.jpg" type='image/x-icon'/ >
  </head>

<body>