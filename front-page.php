<?php get_header(); ?>

    <div class="slider">
    <?php echo do_shortcode('[metaslider id="100"]'); ?>

    </div>
</div>
</header>

<!-- ÚLTIMAS EDIÇÕES -->
<section class="ultimas-edicoes">
    <h1>Últimas Edições</h1>
    <div class="edicoes-box">

        <?php 
        $homepageEdicoes = new WP_Query(array(
            'posts_per_page' => 3,
            'category_name' => 'Edições'
           
        ));
        while ($homepageEdicoes->have_posts()) {
            $homepageEdicoes->the_post(); ?>

        <div class="edicoes-post">
            <div class="tint">
            <?php the_post_thumbnail(); ?>
            </div>
            <h2><a href="<?php the_permalink() ?>">
                    <?php the_title(); ?></a></h2>
            <p>
                <?php echo wp_trim_words(get_the_content(), 17); ?>
            </p>
            <a href="<?php the_permalink(); ?>" class="edicoes-link">read more</a>
        </div>

        <?php } wp_reset_postdata();

    ?>
    </div>
    
</section>

<!-- POSTS -->
<div class="posts-menu">
    <div class="menu-container">
        <a href="#">Notícias</a> |
        <a href="#">Resenhas</a> |
        <a href="#">Eventos</a> |
        <a href="#">Editais</a>
    </div>
</div>

<section class="content">


    <section class="posts">

        <div class="posts-box">

            <?php

            $homepagePosts = New WP_Query(array(
          'posts_per_page' => 3
            ));

            while ($homepagePosts->have_posts()) {
             $homepagePosts->the_post(); ?>

            <div class="posts-post">
                <div class="post-img-box">
                <?php the_post_thumbnail(); ?> 
                            </div>
                <div class="post-text">
                    <h3><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h3>
                    <?php the_excerpt() ?>
                    <a href="<?php the_permalink();?>" class="read-more">read more</a>
                </div>
            </div>

            <?php } wp_reset_postdata();

?>
 
        <div class="see-more">
                <a href="#">Mais posts</a>
            </div>
            
        </div>

        
    </section>

    
<?php 

get_sidebar();

get_footer();
?>