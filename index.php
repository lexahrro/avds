<?php

/*
Template Name: Accueil
*/


require_once('header.php') ?>


<!----------- Section Accueil ----------------->

<section class="section-header">

    <div class="parallax-container">

        <div class="parallax">
            <img src="<?php echo get_template_directory_uri(); ?>/img/header.jpeg" class="img-responsive">
        </div>

        <div class="wrapper">
            <h1 class="text-hero">Votre voiture <br> d'occasion au <br> meilleur prix.</h1>
            <button class="btn btn-header" href="http://pros.lacentrale.fr/C043313">Accéder aux annonces</button>
        </div>

    </div>

</section>




<!---- Exemple de section (typologie : section>container>row>col-md-4), utilisation de h2 class title-section pour les titres des autres sections (définie dans le css), utilisation class img-responsive pour les images, utilisation de hr(séparateurs sous le titre) class hr_white définie dans le css, a utiliser pour les autres sections, présence d'une class hr_black pour les sections a fond clair              Section Annonces ------------->

<section id="annonces" class="section-annonces section-padding">

    <div class="container">

        <div class="row">
            <h2 class="title-section-black">Dernières Annonces</h2>
            <hr class="hr_black">
        </div>

        <div class="row">

            <?php $loop = new WP_Query( array( 'post_type' => 'voiture', 'posts_per_page' => '3' ) ); ?>
            <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

                <div class="col-md-4">
                    <div class="container-img">
                    <?php
                    $image = get_field('image');
                    if( !empty($image) ): ?>
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="img-responsive" />
                        <?php if( get_field('vendu') == 'Oui' ): ?>
                            <div class="bottom-right"><h3 class="vendu">Vendu</h3></div>
                            <?php else: ?>
                            <div class="bottom-right"><h3 class="prix"><?php the_field('prix'); ?> €</h3></div>
                        <?php endif; ?>

                        <?php if(get_field('vendu') == 'Non' ) : ?>
                            <?php the_field('prix'); ?>
                        <?php else : ?>
                            <div class="bottom-right"><h3 class="vendu">Vendu</h3></div>
                        <?php endif; ?>
                    </div>

                <?php endif; ?>

                    <div class="row desc-annonces">
                        <div class="col-md-7 col-xs-7">
                            <h4 class="marque"><?php the_field('marque'); ?></h4>
                        </div>
                        <div class="col-md-5 col-xs-5">
                            <h4 class="pull-right annee"><?php the_field('annee'); ?></h4>
                        </div>
                    </div>
                    <div class="row desc-annonces">
                        <div class="col-md-7 col-xs-7">
                            <h4 class="modele"><?php the_field('modèle'); ?></h4>
                        </div>
                        <div class="col-md-5 col-xs-5">
                            <h4 class="pull-right km"><?php the_field('kilometrage'); ?> km</h4>
                        </div>
                    </div>
                </div>

            <?php endwhile; wp_reset_query(); ?>

        </div>


        <div class="row">

            <div class="col-md-8">

                <h1 class="annonces-call">Retrouvez plus de vehicules sur notre vitrine LaCentrale.fr</h1>

            </div>

            <div class="col-md-4  blockmini">

                <a class="btn btn-lacentrale pull-right" href="http://pros.lacentrale.fr/C043313">Toutes les annonces</a>

                <p class="pull-right quote-lacentrale">Via le site de LaCentrale.fr</p>

            </div>

        </div>

    </div>

</section>

<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade modal-fullscreen" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="container">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Bienvenue au garage Automobile du Val de Seine ! </h5>
                <button type="button" class="close btn-close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="cross">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p class="text-popup">
                    Vous êtes à la recherche d’un véhicule d’occasion ou d’un potentiel acheteur pour votre véhicule ? Nous sommes à votre service, en vous proposant une grande diversité de véhicules d’occasion récents, toutes marques, dotés d’une garantie européenne de 6 à 24 mois, révision incluse, avec bientôt dans notre gamme des véhicules électriques.
                    Une étude de financement personnalisée en coopération avec nos partenaires est aussi disponible pour la vente, l’achat ou la reprise de véhicule aux conditions de l’Argus.

                    Chaque jour, notre équipe contribue à remplir les tâches suivantes :
                </p>
                <ul class="liste-popup">
                    <li>Pouvoir vous conseiller au mieux sur les véhicules du catalogue</li>
                    <li>Fournir un service de qualité de la part de toute l’équipe en vous permettant de nous contacter par mail ou par téléphone. Nous recevons également sur rendez-vous.</li>
                    <li>Etre transparent sur les conditions et les garanties des véhicules en vous délivrant des devis clairs et précis</li>
                    <li>Le renouvellement de nos offres en promettant de toujours mettre en avant la vente des véhicules d’occasion les plus récents</li>
                    <li>Transactions sécurisées</li>
                </ul>

                <p class="text-popup">

                    La concession Automobile Val-de-Seine est éco-responsable. C’est pourquoi nous sommes très fiers d’annoncer l'arrivée prochaine de véhicules propres.
                    Si vous venez en voiture, nous sommes situés à 2kms de l’autoroute A15, sortie N°5 la patte d’oie d’Herblay.
                    Pour vous rendre chez nous en transport, nous sommes à proximité de la gare de La Frette -Montigny (7 mn à pied), ligne J desservie par Paris St Lazare.
                </p>
            </div>
        </div>
        </div>
    </div>
</div>

<!-- Button trigger modal -->


<!----------------------- Section A propos ------------------------>

<section id="apropos" class="section-apropos section-padding">

    <div class="container">

        <div class="row">
            <h2 class="title-section-white titreapropos center">A Propos</h2>
            <hr class="hr_white">
        </div>

        <div class="row">

            <div class="col-md-12">
                <img src="<?php echo get_template_directory_uri(); ?>/img/bg_contact.jpg"  class="img-responsive imgapropos">
                <p class="text-apropos"> Vous êtes à la recherche d'un vehicule d'occasion ou d'un potentiel acheteur pour votre véhicule ? Nous sommes à votre service, en nous proposant une grande diversité de véhicules d'occasion récents, toutes marques, dotés de d'une garantie européenne de 6 à 24 mois, révision incluse, avec bientôt dans notre gamme des vehicules éléctriques.
                </p>
            </div>
        </div>

        <div class="row">

            <div class="col-md-4 col-md-offset-4">

                <button type="button" class="btn btn-plus text-center center-block" data-toggle="modal" data-target="#exampleModal">
                    En savoir plus
                </button>
            </div>

        </div>

    </div>

</section>


<!----------------------- Section AVDS eco ------------------------>

<section id="sectioneco" class="styleeco">

    <div class="container">

        <div class="row">
            <h2 class="title-section-black titreeco center">AVDS Eco</h2>
            <hr class="hr_black">
        </div>

        <div class="row">

            <div class="col-md-5">

                <div class="partiearriere"></div>
                <img class="img-fluid d-block w-100 img-thumbnail imgeco" src="<?php echo get_template_directory_uri(); ?>/img/header.jpeg">

            </div>

        </div>

    </div>

</section>



<!----- Section Contact ----->


<section id="contact" class="section-contact section-padding">

    <div class="container">

        <div class="row">
            <h2 class="title-section-white titreannonces center">Contact</h2>
            <hr class="hr_white hrpremiere">
        </div>

        <div class="row">

            <div class="col-md-6">

                    <h3 class="title-contact">Automobiles du Val de Seine</h3>
                        <p  href="#" class="active nav-link adressepolice"><i class="fa fa-map-marker fa-2x adresse" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;1 rue Jean Lefebvre 95530 LA FRETTE SUR SEINE</p>
                        <br>
                        <p href="#" class="nav-link active adressepolice" ><i class="fa fa-phone fa-2x adresse" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;06 14 32 74 78</p>
                        <br>
                        <p  href="#" class="nav-link active adressepolice"><i class="fa fa-globe fa-2x adresse" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;http://pros.lacentrale.fr/C043313</p>

            </div>


            <div class="col-md-6">

                <form>

                    <div class="form-group">
                        <input type="text" class="form-control input-name"  id="InputName" placeholder="Nom et Prénom">
                    </div>

                    <div class="form-group">

                        <input type="email" class="input-email"  class="form-control" id="InputEmail1" placeholder="Enter email">
                    </div>

                    <div class="form-group"><textarea class="form-control input-text" id="Textarea" rows="3" placeholder="Votre message"></textarea> </div>

                    <button type="submit" class="btn  pull-right btn-envoyer">Envoyer</button>

                </form>

            </div>

        </div>

    </div>

</section>





<!----- Section pour la div map ---->


<section class="sectionmap">

    <div class="container">

        <div class="row">
        </div>

    </div>

</section>



<!------ Footer  ------->

<?php get_footer(); ?>

</body>
</html>
