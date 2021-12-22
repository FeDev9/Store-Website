<?php get_header(); ?>

<div class="maps-container">
    <?php if(have_posts()) :
        while(have_posts()):
            the_post( ); 
    ?>

    <div class="post">  
    <?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
</div>
</div>



 <?php endwhile; endif; ?>

 <div class="sidebar">
     <?php get_sidebar(); ?>
 </div>

<?php get_footer(); ?> 