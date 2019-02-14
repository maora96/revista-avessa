
<?php get_header(); 

while(have_posts()) {
    the_post(); ?>
    </header>
    <section class="content">

    
    

    <section class="faq">
           
                    <h1><?php the_title(); ?></h1>
               
            

        <div class="faq-text">
            <?php the_content(); 
            if ( comments_open() || get_comments_number() ) :
     comments_template();
 endif;?>
        </div>
    </section>

    
        
<?php
}

get_sidebar();
get_footer();
?>