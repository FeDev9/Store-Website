<!doctype html>
<html>
	<head>
		<meta charset="<?php bloginfo('charset');?>">
		<title><?php bloginfo('name');?><?php wp_title(' | ')?></title>
		<meta name="description" content="<?php bloginfo('description');?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<?php wp_head(); ?>
	</head>

    
    <?php 

        $args = "page-" . get_the_ID();
    ?>
    
    <body <?php body_class($args); ?>>

        <div class="nav-container ">
            <h1 class="logo">TheTinyFixer</h1>
            <nav class="navbar">
                    <?php
                        wp_nav_menu(
                            array(
								'theme_location' => 'primary',
								'container' => false,
								'menu_class' => 'nav navbar-nav navbar-right',
							)
                        );
                    ?>
            </nav>
        </div>
        
