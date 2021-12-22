<!doctype html>
<html>
	<head>
		<meta charset="<?php bloginfo('charset');?>">
		<title><?php bloginfo('name');?><?php wp_title(' | ')?></title>
		<meta name="description" content="<?php bloginfo('description');?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<?php wp_head(); ?>
	</head>

      <body <?php body_class(); ?>>


      <div class="page-404">

        <h1 class="not-found">Page Not Found</h1>

        <a href="<?php echo home_url(); ?>" class="back-home">Back to home</a>      
          
      </div>





<?php get_footer(); ?>