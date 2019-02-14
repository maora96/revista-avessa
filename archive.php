<?php get_header(); ?>

</header>



<!-- POSTS -->


<section class="content">
    <section class="posts">


        <h1>
            <?php the_archive_title(); ?>
        </h1>


        <div class="posts-box">

            <?php 
            while(have_posts()) {
            the_post(); ?>

            <div class="posts-post">
                <div class="post-img-box">
                <?php the_post_thumbnail(); ?></div>
                <div class="post-text">
                    <span>Posted by
                        <?php the_author_posts_link(); ?> on
                        <?php the_time('d M Y'); ?> in
                        <?php echo get_the_category_list(' | '); ?></span>
                    <h3><a href="<?php the_permalink();?>" class="post-title">
                            <?php the_title(); ?></a></h3>
                    <?php 
                        the_excerpt();
                    ?>
                    <a href="<?php the_permalink(); ?>" class="post-text-link">read more</a>
                </div>
            </div>

            <?php }
            echo paginate_links();
            ?>



        </div>



    </section>

    
<?php 
get_sidebar();

get_footer();
?>