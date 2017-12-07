<!DOCTYPE html>
  <html>
    <head>

        <?php wp_head(); ?>

      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>


      <!-- Compiled and minified JavaScript -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

      <script>
          $(document).ready(function(){
              $('.parallax').parallax();
          });
      </script>





      <nav>

          <?php
          // the query
          $the_query = new WP_Query(
            array(

            )
          );
          ?>

          <?php if ( $the_query->have_posts() ) : ?>

              <!-- pagination here -->

              <!-- the loop -->
              <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                  <h2><?php the_title(); ?></h2>
              <?php endwhile; ?>
              <!-- end of the loop -->

              <!-- pagination here -->

              <?php wp_reset_postdata(); ?>

          <?php endif; ?>
          <nav class="navbar navbar-inverse">
              <div class="container-fluid">
                  <div class="navbar-header">
                      <a class="navbar-brand" href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" class="img-responsive" ></a>
                  </div>
                  <?php
                  wp_nav_menu( array(
                      'menu' => 'avds',
                      'depth' => 1,
                      'container' => false,
                      'menu_class' => 'nav navbar-nav navbar-right',
                      'fallback_cb' => 'wp_page_menu',
                  ));
                  ?>
              </div>



          </nav>

    <?php wp_footer(); ?>

