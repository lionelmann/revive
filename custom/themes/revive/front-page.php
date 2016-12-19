<?php get_header(); ?>

<?php // Loop starts
$args = array(
    'post_type' => 'testimonials',
    'orderby' => 'rand',
    'posts_per_page' => 1,
    );

query_posts($args); ?>

<div class="container ">
    <div class="row section">
        <div class="col s12 m10 offset-m2 ">
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

<?php // Loop starts
$args1 = array(
    'post_type' => 'service',
    'orderby' => 'menu_order',
    'order'   => 'ASC',
    );

query_posts($args1); ?>

<div class="flex-grid">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); 
    $excerpt = get_the_excerpt();
    $thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'banner' ); 
?>

<div class="flex-item">
    <div class="card">
        <div class="card-image">
            <a href="#"><img class="responsive-img" src="<?php echo $thumbnail[0]; ?>"></a>
            <span class="card-title"><?php echo the_title();?></span>
        </div>
        <div class="card-content">
            <p><?php echo $excerpt;?></p>
        </div>
    </div>
</div>

<?php endwhile; else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

</div>

<?php get_footer(); ?>