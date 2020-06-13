@extends('layout')

<!DOCTYPE html>
<html lang="en">
    <!--
        **********************************************************************************************************
        Copyright (c) 2017 DESIDEALS4U
        ********************************************************************************************************** 
        -->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!--[if IE]>
        <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'>
        <![endif]-->
        <meta name="keywords" content="HTML5 Template" />
        <meta name="description" content="Furniturecraft - Multipurpose Ecommerce Responsive Html5 template" />
        <meta name="author" content="desideals4u.com" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Commercia</title>
        <!-- Bootstrap -->
        <!-- Favicon -->
        <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
        <link rel="icon" href="assets/img/favicon.ico" type="image/x-icon">
        <!-- Master Css -->
        <link href="main.css" rel="stylesheet">
        <link href="assets/plugin/switcher/css/switcher.css" rel="stylesheet">
        <link href="assets/css/color.css" rel="stylesheet" id="colors">
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        
        <div class="contenido">
        <header>
            @include('/includes/header')
        </header>
        <!--//==top bar End==//-->
        <!--//==slider section Start==//-->
        <section class="slider-section" id="pubilicidad">
           @include('/includes/publicidad')
        </section>
        <!--//==slider section End==//-->
        
        
        <!--//===Start quick vive popap==//-->
        <!--//================Quick view Start ==============//--> 
        

        <section id="categorias-productos">
            @include('/includes/categorias')
        </section>
        <!--//===Categories-section End==//-->
        <!--//===product-items-section Start==//-->
        <section id="ultimos-productos">
            @include('/includes/ultimos-productos')
        </section>
        <!--//===product-items-section End==//-->
        <!--//===product-items-section End==//-->
	

        <!--//===Partner-section Start==//-->
        <section id="patrocinadores">
            @include('/includes/patrocinadores')
        </section>
        <!--//===Service-section Start==//-->
        <!--//===footer-main-section Start==//-->
        </div>

        <!--//===footer-main-section End==//-->
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/plugin/owl-carousel-slider/js/owl.carousel.min.js"></script>
        <script src="assets/plugin/menu-menu/js/hover-dropdown-menu.js"></script>
        <script src="assets/plugin/fancyBox/js/jquery.fancybox.pack.js"></script>
        <script src="assets/plugin/fancyBox/js/jquery.fancybox-media.js"></script>
        <script src="assets/plugin/vertical-slider/js/jquery.bxslider.js"></script>
        <script src="assets/plugin/acordian/js/jquery-ui.js"></script>
        <script src="assets/plugin/menu-menu/js/jquery.hover-dropdown-menu-addon.js"></script>
        <script src="assets/plugin/switcher/js/switcher.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="assets/js/main.js"></script>
        <script src="https://kit.fontawesome.com/f5a6b916a8.js" crossorigin="anonymous"></script>
    </body>
</html>