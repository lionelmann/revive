<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
<title>Revive Engineering</title>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<div class="navbar-fixed" style="height: 80px; position: fixed;">
    <nav role="navigation" style="height: 80px;">
        <div class="nav-wrapper">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img class="brand-logo" src="<?php echo get_template_directory_uri();?>/dist/images/revive.png"></a>
            <ul class="right hide-on-med-and-down">
             <li><a href="#about">About</a></li>
             <li><a href="#team">Team</a></li>
             <li><a href="#services">Services</a></li>
             <li><a href="#contact">Work with Us</a></li>

            <?php //wp_nav_menu( array( 'theme_location' => 'header-menu', 'container' => false, 'items_wrap' => '%3$s') ); ?>
            </ul>

            <ul id="nav-mobile" class="side-nav">
            <li>About</li>
               <?php //wp_nav_menu( array( 'theme_location' => 'header-menu', 'container' => false, 'items_wrap' => '%3$s') ); ?>
            </ul>
            <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
        </div>
    </nav>
</div>

<div style="position: absolute;  bottom: 0%; left: 50%; transform: translate(-50%, -50%); color: white;">
    <i class="material-icons">arrow_downward</i>
</div>

<div id="index-banner" class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
        <div class="container">
            <h3 class="col m12 center">Revive Engineering works in partnership with architects, designers, and builders offering structural engineering solutions.</h3>
            <div class="row center section">
         
            <a href="#contact" class="button-custom">Let's Work Together</a>
            </div>
        </div>
    </div>
    <div class="parallax overlay"><img src="<?php echo get_template_directory_uri();?>/dist/images/structure_bg.jpg"></div>
</div>




<?php
    $post_id = 7;
    $queried_post = get_post($post_id);
    $title = $queried_post->post_title;
    $content  = wpautop($queried_post->post_content);
?>

<div class="container">
    <div id="about" class="row section scrollspy">
        <div class="col s12 m10 offset-m1 large-font">
            <?php echo $content; ?>
        </div>
    </div>
</div>

<?php // Loop starts 
$args = array(
    'post_type' => 'testimonials',
    'orderby' => 'rand',
    'posts_per_page' => 1,
    );

query_posts($args); ?>

<div class="parallax-container valign-wrapper" style=" min-height: 500px;">
<div class="section no-pad-bot">
        <div class="container">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post();  ?>
            <blockquote>
                <?php echo the_content();?>
            </blockquote>
            <?php endwhile; else : ?>
                <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
            <?php endif; ?>
            <?php rewind_posts(); ?>
        </div>
    </div>
    <div class="parallax overlay"><img src="<?php echo get_home_url(); ?>/custom/uploads/2016/12/tree-trunks-1535531_1280-1200x800.jpg"></div>
</div>


<?php // Loop starts
$args1 = array(
    'post_type' => 'service',
    'orderby' => 'menu_order',
    'order'   => 'ASC',
    );

query_posts($args1); ?>

<div id="services" class="row scrollspy">
    <div class="col s12">
        <div class="flex-grid">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); 
            $content    = get_the_content();
            $excerpt = get_the_excerpt();
        ?>
        <div class="flex-item">
            <h5 class="center"><?php echo the_title();?></h5>
            <p style="font-size: 1.2em;"><?php echo $content;?></p>
        </div>
        <?php endwhile; else : ?>
            <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>
        </div>
    </div>
</div>

<?php // Loop starts
$args2 = array(
    'post_type' => 'team',
    'order'   => 'DESC',
    );

query_posts($args2); ?>

<section id="team" class="scrollspy" style="background-color: #eceff1;">
<div class="container">
    <div class="row section" style="margin-bottom: 0;">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); 
            $content   = get_the_content();   
        ?>
        <div class="col s12 m6 center" style="padding: 2em;">
            <img class="circle esponsive-img" style="width: 70%; border: 1px solid white;" src="<?php the_post_thumbnail_url(); ?>"/>
            <h3 style="text-align: left"><?php echo the_title();?></h3>
            <p style="font-size: 1.2em; text-align: left;"><?php echo $content;?></p>
        </div>      
    
<?php endwhile; else : ?>
            <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>

       
             <div class="row center">
                    <a href="https://www.instagram.com/msrpeng/" target="_blank"><i class="fa fa-instagram fa-3x" aria-hidden="true" style="padding: .2em; color: #37474f;"></i></a>
                    <a href="https://www.facebook.com/ReviveEngineering/" target="_blank"><i class="fa fa-facebook-square fa-3x" aria-hidden="true" style="padding: .2em; color: #37474f;"></i></a>
                    <a href="https://twitter.com/msrpeng" target="_blank"><i class="fa fa-twitter-square fa-3x" aria-hidden="true" style="padding: .2em; color: #37474f;"></i></a>
                </div>
            
        </div>
        </div>
</section>

<section class="white-text scrollspy" id="contact" style="background-color: #607d8b;">
<div class="container">
<div class="row section">
<div class="col s12 m8 offset-m2">
<h2 class="center">Let's Work Together</h2>

<?php echo do_shortcode('[contact-form-7 id="51" title="Contact form 1"]'); ?>
</div>
</div>
</div>
