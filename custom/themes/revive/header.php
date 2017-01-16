<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
<title>Revive Engineering</title>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<div class="navbar-fixed" style="height: 80px;">
    <nav role="navigation" style="height: 80px;">
        <div class="nav-wrapper">
            <a id="logo-container" href="<?php echo esc_url( home_url( '/' ) ); ?>" class="brand-logo"><img src="<?php echo get_template_directory_uri();?>/dist/images/revive.png" style="width: 30%;"></a>
            <ul class="right hide-on-med-and-down">
            <?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container' => false, 'items_wrap' => '%3$s') ); ?>
            </ul>

            <ul id="nav-mobile" class="side-nav">
               <?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container' => false, 'items_wrap' => '%3$s') ); ?>
            </ul>
            <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
        </div>
    </nav>
</div>

<?php if ( is_home() ) { ?>
<div class="row" style="margin-bottom: 0px;">
    <div class="col s12 m6" style="padding:0;">
        <div class="parallax-container valign-wrapper" style="height: 100vh; margin-top: -80px;">
            <div class="container">
                <div class="row center">
                    <h4 class="col s12">Revive Engineering works in partnership with architects, designers, and builders offering structural engineering solutions.  
                    </h4>
                </div>
                <div class="row center">
                    <a href="https://www.instagram.com/msrpeng/" target="_blank"><i class="fa fa-instagram fa-3x" aria-hidden="true" style="padding: .2em;"></i></a>
                    <a href="https://www.facebook.com/ReviveEngineering/" target="_blank"><i class="fa fa-facebook-square fa-3x" aria-hidden="true" style="padding: .2em;"></i></a>
                    <a href="https://twitter.com/msrpeng" target="_blank"><i class="fa fa-twitter-square fa-3x" aria-hidden="true" style="padding: .2em;"></i></a>
                </div>
            </div>
            <div class="parallax overlay"><img src="<?php echo get_template_directory_uri();?>/dist/images/structure_bg.jpg"></div>
        </div>
    </div>
    <div class="col s12 m6  blue-grey lighten-5 valign-wrapper" style="height: 100vh; margin-top: -80px; ">

<form class="col s12">
      <div class="row">
<?php echo do_shortcode( '[contact-form-7 id="51" title="Contact form 1"]' ); ?>

        
    </div>
</div>

<?php } ?>


