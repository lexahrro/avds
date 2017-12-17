<?php
/*
Template Name: Blog
*/

get_header(); ?>

<?php
/*
	Template Name: Blog
*/
?>
<?php get_header(); ?>
<section class="blog">
<div class="container">
    <div class="row">
    <?php // Display blog posts on any page @ https://m0n.co/l
    $temp = $wp_query; $wp_query= null;
    $wp_query = new WP_Query(); $wp_query->query('posts_per_page=5' . '&paged='.$paged);
    while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
    <div class="col-md-4">
        <?php the_post_thumbnail('full', array('class' => 'img-responsive') ); ?>
        <h2><a href="<?php the_permalink(); ?>" title="Read more"><?php the_title(); ?></a></h2>
        <?php the_excerpt(); ?>
    </div>
    <?php endwhile; ?>

    <?php if ($paged > 1) { ?>

        <nav id="nav-posts">
            <div class="prev"><?php next_posts_link('&laquo; Previous Posts'); ?></div>
            <div class="next"><?php previous_posts_link('Newer Posts &raquo;'); ?></div>
        </nav>

    <?php } else { ?>

        <nav id="nav-posts">
            <div class="prev"><?php next_posts_link('&laquo; Previous Posts'); ?></div>
        </nav>

    <?php } ?>

    <?php wp_reset_postdata(); ?>
    </div>
</div>
</section>


<?php get_footer(); ?>
