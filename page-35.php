<!-- Contact Page -->

<?php get_header(); ?>


<div class="contact-container">
    <div class="contact-img">
    </div>


<div class="form">  
    <?php if(have_posts()) :
        while(have_posts()):
            the_post( ); 
    ?>
    
         <?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
    </div>
</div>
 <?php endwhile; endif; ?>

<?php get_footer(); ?> 

