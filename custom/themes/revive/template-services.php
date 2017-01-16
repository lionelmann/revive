<?php 
/**
* Template Name: Services
*/
get_header(); ?>

<?php  
    $thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'banner' ); 
?>

<div class="row" style="margin-bottom: 0px;">
    <div class="col m12" style="padding:0; margin-top: -80px;"">
        <div class="parallax-container valign-wrapper">
            <div class="container">
                <div class="row">
                    <h1 class="header col s12 light center"><?php the_title();?></h1>
                </div>
            </div>
            <div class="parallax overlay"><img src="<?php echo $thumbnail[0]; ?>"></div>
        </div>
    </div>
</div>

<div class="service">
    <?php 

    $query = array(
        'post_type' => 'service',
        'orderby' => 'menu_order',
        'order'   => 'ASC',
        );

    query_posts($query); 

    if ( have_posts() ) : while ( have_posts() ) : the_post(); 
        $content    = get_the_content();
        $image      = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); 

    ?>

    <section class="panel sub-panel wow fadeIn">
        <span class="table-cell cover panel" style="background-image: url('<?php echo $image[0]; ?>');">
            <h4 class="white-text center" ><?php the_title();?></h4>
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

<?php get_footer(); ?>