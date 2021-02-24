<?php
 
    require 'vendor/autoload.php';

    use app\lib\Session;
    use app\lib\DB;
    use app\lib\Format;
    use app\core\Product;
    use app\core\Category;
    use app\core\Customer;
    use app\core\Cart;
    use app\core\Contact;
    use app\core\Tenant;

    $session = new Session;
    $session::init();

    $db   =   new DB();
    $fm   =   new Format();
    $pd   =   new Product();
    $ct   =   new Cart();
    $cat  =  new Category();
    $cmr  =  new Customer();
    $cnt  =  new Contact();
    $ph   =   new Tenant();

 ?>
<?php
  header("Cache-Control: no-cache, must-revalidate");
  header("Pragma: no-cache");
  header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
  header("Cache-Control: max-age=2592000");
?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from d-themes.com/html/donald/demo11.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 05 Feb 2021 01:26:06 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>Donald - Bootstrap eCommerce Template</title>
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Donald - Bootstrap eCommerce Template">
    <meta name="author" content="D-THEMES">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="images/icons/favicon.png">
    <link rel="stylesheet" type="text/css" href="./layouts/vendors/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="./layouts/vendors/animate/animate.min.css">

    <!-- Plugins CSS File -->
    <link rel="stylesheet" type="text/css" href="./layouts/vendors/magnific-popup/magnific-popup.min.css">
    <link rel="stylesheet" type="text/css" href="./layouts/vendors/owl-carousel/owl.carousel.min.css">

    <!-- Main CSS File -->
    <link rel="stylesheet" type="text/css" href="./layouts/css/demo11.min.css">


    <script>
        WebFontConfig = {
            google: { families: ['Open+Sans:400,600,700', 'Poppins:400,600,700'] }
        };
        (function (d) {
            var wf = d.createElement('script'), s = d.scripts[0];
            wf.src = 'js/webfont.js';
            wf.async = true;
            s.parentNode.insertBefore(wf, s);
        })(document);
    </script>
</head>

<body class="home">