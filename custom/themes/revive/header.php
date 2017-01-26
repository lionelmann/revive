<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
<title>Revive Engineering</title>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<section class="navbar-fixed menu" style="height: 80px; position: fixed;">
    <nav role="navigation" style="height: 80px;">
        <div class="nav-wrapper">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img class="brand-logo" src="<?php echo get_template_directory_uri();?>/dist/images/revive.png"></a>
            <ul class="right hide-on-med-and-down">
                <li><a href="#about">About</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#team">Team</a></li>
                <li><a href="#contact">Work with Us</a></li>
            </ul>

            <ul id="nav-mobile" class="side-nav">
                <li>About</li>
            </ul>
            <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
        </div>
    </nav>
</section>

<div style="position: absolute;  bottom: 0%; left: 50%; transform: translate(-50%, -50%); color: white;">
    <i class="material-icons">arrow_downward</i>
</div>
<section id="top">
<div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
        <div class="container wow fadeIn">
            <h3 class="col m12 center">Revive Engineering works in partnership with architects, designers, and builders offering structural engineering solutions.</h3>
            <div class="row center section">
            <br><br>
            <a href="#contact" class="button-custom">Let's Work Together</a>
            </div>
        </div>
    </div>
    <div class="parallax overlay"><img src="<?php echo get_home_url(); ?>/custom/uploads/2017/01/boys-1149665_1280.jpg"></div>
</div>
</section>

<!-- ABOUT STARTS -->
<section id="about" class="scrollspy">
    <?php
        $post_id = 7;
        $queried_post = get_post($post_id);
        $title = $queried_post->post_title;
        $content  = wpautop($queried_post->post_content);
    ?>
    <div class="container" >
        <div class="row section ">
            <div class="col s12 m10 offset-m1 large-font">
                <?php echo $content; ?>
            </div>
        </div>
    </div>
    <?php
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
                <span class="right"> - <?php echo the_title();?></span>

                <?php endwhile; endif; ?>
                <?php rewind_posts(); ?>
            </div>
        </div>
        <div class="parallax overlay"><img src="<?php echo get_home_url(); ?>/custom/uploads/2016/12/tree-trunks-1535531_1280-1200x800.jpg"></div>
    </div>
</section>

<!-- SERVICES START -->
<section id="services" class="row scrollspy">
    <?php
    $args1 = array(
        'post_type' => 'service',
        'orderby'   => 'menu_order',
        'order'     => 'ASC',
        );

    query_posts($args1); ?>

    <div class="col s12">
        <div class="flex-grid">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); 
            $content = get_the_content();
            $excerpt = get_the_excerpt();
        ?>
        <div class="flex-item wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
            <h5 class="center"><?php echo the_title();?></h5>
            <p style="font-size: 1.2em;"><?php echo $content;?></p>
        </div>
        <?php endwhile; endif; ?>
        </div>
    </div>
</section>

<!-- TEAM STARTS -->
<section id="team" class="scrollspy" style="background-color: #eceff1;">
    <?php
    $args2 = array(
        'post_type' => 'team',
        'order'   => 'DESC',
        );

    query_posts($args2); ?>

    <div class="container">
        <div class="row section" style="margin-bottom: 0;">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); 
                $content   = get_the_content();
                $creds = rwmb_meta( 'rw_creds' );
                $role = rwmb_meta( 'rw_role' );
                $linkedin = rwmb_meta( 'rw_linkedin' );
            ?>
            <div class="col s12 m6 center" style="padding: 2em;">
                <img class="circle esponsive-img" style="width: 70%; border: 1px solid white;" src="<?php the_post_thumbnail_url(); ?>"/>
                <h3 style="text-align: left"><?php echo the_title();?><span style="font-size: 16px; margin-left: 1em;"><?php echo $creds; ?></span></h3>
                <p style="font-size: 1em; text-align: left;"><?php echo $role;?>
                <?php if($linkedin) : ?>
                | <a href="<?php echo $linkedin;?>" target="blank">Linkedin</a></p>
            <?php endif ?>
                <p style="font-size: 1.2em; text-align: left;"><?php echo $content;?></p>


            </div>      
    
            <?php endwhile; else : ?>
                <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
            <?php endif; ?>
        </div>
       
        <div class="row center section" style="margin-bottom: 0;">
            <a href="https://www.instagram.com/msrpeng/" target="_blank"><i class="fa fa-instagram fa-3x" aria-hidden="true" style="padding: .2em; color: #37474f;"></i></a>
            <a href="https://www.facebook.com/ReviveEngineering/" target="_blank"><i class="fa fa-facebook-square fa-3x" aria-hidden="true" style="padding: .2em; color: #37474f;"></i></a>
            <a href="https://twitter.com/msrpeng" target="_blank"><i class="fa fa-twitter-square fa-3x" aria-hidden="true" style="padding: .2em; color: #37474f;"></i></a>
        </div>    
    </div>
</section>

<!-- LET'S WORK TOGETHER STARTS -->
<section id="contact" class="scrollspy" style="background-color: #607d8b;">
    <div class="container">
        <div class="row section" style="margin-bottom: 0;">
            <div class="col s12 m8 offset-m2 white-text ">
                <h2 class="center">Let's Work Together</h2>
                <?php echo do_shortcode('[contact-form-7 id="51" title="Contact form 1"]'); ?>
            </div>
        </div>
    </div>
</section>