<?php

get_header();
?>

<main id="primary" class="site-main">
    <section class="banner">
        <video class="fade-in-down" id="background-video" autoplay loop muted preload="auto"> <!-- Video de bannière lecture auto sans son et préchargée -->
            <source src="<?php echo home_url(); ?>/wp-content/themes/foce-child/assets/video/Studio+Koukaki-vidéo+header+sans+son+(1).mp4" type="video/mp4">
        </video>
        <div class="content">
            <h1><img class="anim-logo banner_img" src="<?php echo get_template_directory_uri() . '/assets/images/logo.png'; ?>" alt="logo Fleurs d'oranger & chats errants"></h1>
        </div>
    </section>

    <section id="#story" class="story fade-in">
        <h2><span class="fade-up">L'histoire</span></h2>
        <article id="" class="story__article">
            <p><?php echo get_theme_mod('story'); ?></p>
        </article>

        <?php get_template_part('template-parts/characters-carousel'); // Template-part du slider ?>

        <article id="place">
            <div>
                <h3>Le Lieu</h3>
                <div class="clouds big-cloud">
                    <img id="big_cloud" src="<?php echo get_stylesheet_directory_uri() . '/assets/img/big_cloud.png'; ?>">
                </div>
                <div class="clouds little-cloud">
                    <img id="little_cloud" src="<?php echo get_stylesheet_directory_uri() . '/assets/img/little_cloud.png'; ?>">
                </div>
                <p><?php echo get_theme_mod('place'); ?></p>
            </div>

        </article>
    </section>


    <section id="studio" class="fade-in">
        <h2>
            <span class="fade-up first-word">Studio</span>
            <span class="fade-up second-word">Koukaki</span>
        </h2>
        <div>
            <p>Acteur majeur de l’animation, Koukaki est un studio intégré fondé en 2012 qui créé, produit et distribue des programmes originaux dans plus de 190 pays pour les enfants et les adultes. Nous avons deux sections en activité : le long métrage et le court métrage. Nous développons des films fantastiques, principalement autour de la culture de notre pays natal, le Japon.</p>
            <p>Avec une créativité et une capacité d’innovation mondialement reconnues, une expertise éditoriale et commerciale à la pointe de son industrie, le Studio Koukaki se positionne comme un acteur incontournable dans un marché en forte croissance. Koukaki construit chaque année de véritables succès et capitalise sur de puissantes marques historiques. Cette année, il vous présente “Fleurs d’oranger et chats errants”.</p>
        </div>
    </section>

</main><!-- #main -->

<?php
get_template_part('template-parts/festival-nomination');
get_footer();
