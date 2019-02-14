<?php
/* Template Name: Parceiros */ 
get_header(); ?>

</header>



<!-- EQUIPE -->
<section class="content">
<section class="equipe">
    <h1><?php single_post_title(); ?></h1>
    <div class="equipe-box">

    <?php
    
    $parceirosPosts = new WP_Query(array(
        'post_type' => 'parceiros'
    ));
    while ($parceirosPosts->have_posts()) {
        $parceirosPosts->the_post(); ?>

            <div class="equipe-single">
            <div class="equipe-img-box"><img src="<?php the_field('imagem'); ?>" alt=""></div>
            <div class="equipe-text">
                <h2><?php the_field('nome'); ?></h2>
                <h3><?php the_field('area'); ?></h3>
                <p><?php the_content(); ?></p>
                <div class="social-media">
                        <a href="<?php the_field('twitter'); ?>"><img src="<?php echo get_theme_file_uri('/images/Twitter.png') ?>" alt=""></a>
                        <a href="<?php the_field('instagram'); ?>"><img src="<?php echo get_theme_file_uri('/images/Instagram.png') ?>" alt=""></a>
                        <a href="<?php the_field('facebook'); ?>"><img src="<?php echo get_theme_file_uri('/images/Facebook.png') ?>" alt=""></a>
                        <a href="<?php the_field('website'); ?>"><img src="<?php echo get_theme_file_uri('/images/web.png') ?>" alt=""></a>
                    </div>
            </div>
        </div>

    <?php } wp_reset_postdata();


    ?>

      
    </div>
</section>

    

<?php 
get_sidebar();

get_footer();
?>