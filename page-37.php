<?php get_header(); ?>


<h4 class="main-title">your smartphone is broken and you need help? <br>
visit our store</h4>

<div class="feed-container">

    <div class="blog-section">
        <h1 class="home-title">Latest News</h1>
   
    
    <div class="blog-post">
        <?php
 
// The Query
$args = array(
    'post_type' => 'post',
    'post_per_page' => 2
);
$the_query = new WP_Query( $args );
 
// The Loop
if ( $the_query->have_posts() ) {
    echo '<ul>';
    while ( $the_query->have_posts() ) {
        $the_query->the_post();
        echo '<li>';
        echo '<h1>' . get_the_title() . '</h1>';
        echo '<p>' . get_the_content() . '</p>';
        echo '<div>' . get_the_post_thumbnail( 'thumbnail') . '</div>';
        echo '</li>';
        echo '<hr>';
    }
    echo '</ul>';
} else {
    // no posts found
}
/* Restore original Post Data */
wp_reset_postdata();
?>
 </div>
    </div>
    <?php if(have_posts()) :
        while(have_posts()):
            the_post( );
    ?>
    <div class="post">  
        <h1 class="home-title">Instagram Feed</h1>
         <?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
    </div>
</div>
 <?php endwhile; endif; ?>

<?php get_footer(); ?> 