<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package brutalist
 */

?><!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<title><?php wp_title(); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<meta name="description" content="">
<?php wp_head(); ?>
</head>
  
<body <?php body_class(); ?>>
  <!--[if lt IE 8]>
  <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
  <![endif]-->

 <nav class="navbar navbar-default navbar-static-top">

    <div class="container">

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="">
        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown active">
            <a href="#animatedModal" id="nav-modal"><i class="fa fa-compass fa-3x" aria-hidden="true"></i>
            </span></a>
          </li>

          
        </ul>
        </div><!-- /.navbar-collapse -->

        </div><!-- /.container-fluid -->
      </nav>

