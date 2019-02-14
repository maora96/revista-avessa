<?php get_header(); 

while(have_posts()) {
    the_post(); ?>
</header>
<section class="content">




    <section class="faq">

        <h1>
            <?php the_title(); ?>
        </h1>



        <div class="faq-text">
            <span>Posted by
                <?php the_author_posts_link(); ?> on
                <?php the_time('d M Y'); ?> in
                <?php echo get_the_category_list(' | '); ?></span>
            <?php the_content(); ?>
        </div>
<?php 
        if ( comments_open() || get_comments_number() ) :
     comments_template();
 endif;
 ?>
    </section>


    

<?php
}

get_sidebar();


get_footer();
?>