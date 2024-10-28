<?php
// Récupérer tous les personnages
$args = array(
    'post_type' => 'characters',
    'posts_per_page' => -1,
    'meta_key'  => '_main_char_field',
    'orderby'   => 'meta_value_num',
);
$characters_query = new WP_Query($args);
?>

<article id="characters">
    <h3>Les personnages</h3>
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <?php
            while ( $characters_query->have_posts() ) {
                $characters_query->the_post();
                echo '<figure class="catPicture swiper-slide">';
                echo get_the_post_thumbnail( get_the_ID(), 'full' );
                echo '<figcaption>';
                the_title();
                echo'</figcaption>';
                echo '</figure>';
            }
            ?>
        </div>
    </div>
</article>

<?php
// Réinitialiser la requête après l'utilisation de WP_Query
wp_reset_postdata();
?>


