<?php require_once('header.php') ?>

<div class="parallax-container">
    <div class="parallax"><img src="<?php echo get_template_directory_uri(); ?>/img/header.jpeg" class="img-responsive"></div>
</div>
<div class="section white">
    <div class="row container">
        <h2 class="header">Parallax</h2>
        <p class="grey-text text-darken-3 lighten-3">Parallax is an effect where the background content or image in this case, is moved at a different speed than the foreground content while scrolling.</p>
    </div>
</div>

<section id="mot-clef" class="section-annonces">


    <?php $loop = new WP_Query( array( 'post_type' => 'voiture', 'posts_per_page' => '3' ) ); ?>
    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
        <?php the_field('marque'); ?>
        <?php the_field('modèle'); ?>
        <?php the_field('kilometrage'); ?>
        

        <?php the_content() ?>
    <?php endwhile; wp_reset_query(); ?>

</section>

</div>
</body>
</html>
