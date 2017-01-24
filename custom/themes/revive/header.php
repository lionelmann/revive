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
            <?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container' => false, 'items_wrap' => '%3$s') ); ?>
            </ul>

            <ul id="nav-mobile" class="side-nav">
               <?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container' => false, 'items_wrap' => '%3$s') ); ?>
            </ul>
            <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
        </div>
    </nav>
</div>

<div id="index-banner" class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
        <div class="container">

            <h3 class="col m12 center">Revive Engineering works in partnership with architects, designers, and builders offering structural engineering solutions.</h3>
            <div class="row center">
             <div class="row center">
                    <a href="https://www.instagram.com/msrpeng/" target="_blank"><i class="fa fa-instagram fa-3x" aria-hidden="true" style="padding: .2em; color: white;"></i></a>
                    <a href="https://www.facebook.com/ReviveEngineering/" target="_blank"><i class="fa fa-facebook-square fa-3x" aria-hidden="true" style="padding: .2em; color: white;"></i></a>
                    <a href="https://twitter.com/msrpeng" target="_blank"><i class="fa fa-twitter-square fa-3x" aria-hidden="true" style="padding: .2em; color: white;"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="parallax overlay"><img src="<?php echo get_template_directory_uri();?>/dist/images/structure_bg.jpg"></div>
</div>


<?php // Loop starts 
$args = array(
    'post_type' => 'testimonials',
    'orderby' => 'rand',
    'posts_per_page' => 1,
    );

query_posts($args); ?>
<section class="grey lighten-5">
<div class="container ">
    <div class="row section" style="margin-bottom: 0;">
        <div class="col s12 m10 offset-m1 ">
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
</div>
</section>

<?php // Loop starts
$args1 = array(
    'post_type' => 'service',
    'orderby' => 'menu_order',
    'order'   => 'ASC',
    );

query_posts($args1); ?>

<div class="service">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); 
    $content    = get_the_content();
    $image      = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); 
?>

<section class="panel sub-panel wow fadeIn">
        <span class="table-cell cover panel" style="background-image: url('<?php echo $image[0]; ?>');">
            <h3 class="white-text center" ><?php the_title();?></h3>
        </span>
        <div class="table-cell">
            <div class="row">
            <div class="col s12 m8 offset-m2 l9 offset-l1">
            <h4 ><?php echo get_the_excerpt(); ?></h4>
            <p style="font-size: 1.3em;"><?php echo $content; ?></p>
            </div>
            </div>
        </div>
    </section>

<?php endwhile; else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

</div>


