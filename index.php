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











<div class="container">

    <div class="row">



        <a class="title">Votre voiture d'occasion au meilleur prix</a>

    </div>

</div>









<div class="imageonepage"></div>





<div class="container-fluid titredeux">

    <div class="row">

        <a class=" col-md-3 titredeuxpolice btn btn-primary"> Dernières Annonces </a>




    </div>

</div>









<div class="container-fluid annonces">

    <div class="row">

        <div class="col-md-4 premiere exempleimg">
            <img src="<?php echo get_template_directory_uri(); ?>/img/exemplevoiture.jpg" class='img-responsive'>

        </div>

        <div class=" col-md-4 deuxième exempleimg">

        </div>

        <div class=" col-md-4 troisième exempleimg">

        </div>

    </div>





















</div>











<div class="col-sm-4 inscription">
    <div id="horizontal-flip" class="card inscription2">
        <div class="flip">
            <div class="front">
                <h1>
                    <span>Contact</span>
                    <span class="big">Us Now</span>
                </h1>
            </div>
            <div class="back">
                <input placeholder="Name">
                <input placeholder="Daytime Phone">
                <input placeholder="Email Address">
                <button>Send</button>
            </div>
        </div>
    </div>
</div>



<script  src="js/index.js"></script>











</div>
</body>
</html>
