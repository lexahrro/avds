<?php require_once('header.php') ?>

<section class="section-header">
    <div class="parallax-container">
        <div class="parallax"><img src="<?php echo get_template_directory_uri(); ?>/img/header.jpeg" class="img-responsive"></div>
    </div>
</section>







<!---- Exemple de section (typologie : section>container>row>col-md-4), utilisation de h2 class title-section pour les titres des autres sections (définie dans le css), utilisation class img-responsive pour les images, utilisation de hr(séparateurs sous le titre) class hr_white définie dans le css, a utiliser pour les autres sections, présence d'une class hr_black pour les sections a fond clair ------------->

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
                <?php endif; ?>
            </div>
            <?php endif; ?>
            <div class="row desc-annonces">
                <div class="col-md-7 col-xs-7">
                <h4><?php the_field('marque'); ?></h4>
                </div>
                <div class="col-md-5 col-xs-5">
                    <h4 class="pull-right"><?php the_field('annee'); ?></h4>
                </div>
            </div>
            <div class="row desc-annonces">
                <div class="col-md-7 col-xs-7">
                    <h4><?php the_field('modèle'); ?></h4>
                </div>
                <div class="col-md-5 col-xs-5">
                    <h4 class="pull-right"><?php the_field('kilometrage'); ?> km</h4>
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

            <a class="btn btn-lacentrale pull-right" href="">Toutes les annonces</a>

            <p class="pull-right quote-lacentrale">Via le site de LaCentrale.fr</p>

        </div>

    </div>


</div>
</section>




<section id="apropos" class="sectionapropos" style="background-color: #022395">

    <div class="container">

        <div class="row">
            <h2 class="title-section-white titreapropos center">A Propos</h2>
            <hr class="hr_white">
        </div>

        <div class="row">

            <div class="col-md-12"><img src="<?php echo get_template_directory_uri(); ?>/img/header.jpeg"  class="img-responsive imgapropos">
                <p class="paragraphe lead"> Vous êtes à la recherche d'un vehicule d'occasion ou d'un potentiel acheteur pour votre véhicule ?
                    Nous sommes à votre service, en nous proposant une grande diversité de véhicules d'occasion récents, toutes marques,
                    dotés de d'une garantie européenne de 6 à 24 mois, révision incluse, avec bientôt dans notre gamme des vehicules éléctrique.</p></div>

        </div>

        <div class="row">

            <div class="col-md-12">

                <a class="btn btn-success center-block plus text-center" href="">Toutes les annonces</a>

            </div>

        </div>

    </div>
</section>

<div class="col-md-12 debuteco"></div>


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

















<!----- Section formulaire ----->






<section class="section-contact section-padding">

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


<section class="sectionmap" id="mapexemple">

    <div class="container">

        <div class="row">



        </div>

    </div>

</section>



<!-------- Fin Section pour la div map ----->













<!------ Footer site BAP ------->




<div class=" col-md-12 debutfooter"></div>



<section id="footer" class="footerbap" style="background: #202226!important;">

    <div class="container">

        <div class="row">

            <div class="col-md-4 col-md-offset-4">

                <p class="credits">2017 © AUTOMOBILES DU VAL DE SEINE<br>TVA Intracommunautaire<br> - 82534063100019 - RCS
                </p>



                <div class="row deplacementréseaux">

                    <div class="col-md-4 col-xs-4 facebook">
                        <a href="#" target="_blank"><i  class="fa fa-facebook fa-5x" aria-hidden="true"></i></a>
                    </div>
                    <div class="col-md-4 col-xs-4 insta">
                        <a href="" target="_blank"><i class="fa fa-instagram fa-5x" aria-hidden="true"></i></a>
                    </div>
                    <div class="col-md-4 col-xs-4 linkedin">
                        <a href="" target="_blank"><i class="fa fa-linkedin-square fa-5x" aria-hidden="true"></i></a>
                    </div>

                </div>



            </div>

            <div class="row">
                <div class="col-md-12"></div>
            </div>
        </div>
    </div>


</section>















<script  src="js/index.js"></script>











</div>
</body>
</html>
