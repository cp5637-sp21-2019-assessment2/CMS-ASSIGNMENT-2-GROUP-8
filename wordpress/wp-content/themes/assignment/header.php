<?php



?>
<!DOCTYPE html>
<html>
<meta charset="UTF-8"/>
    <head>
        <?php wp_head() ?>   
</head>
    <body>
    <div class="site-main container">
     <header class="site-header">
      <div class="site-branding">
        <?php the_custom_logo() ?>
            </a>
      </div>
       <div class="site-navigation">
           <?php
             wp_nav_menu(array(
                 'theme_location' => 'primary'
             ) );
             ?>
    
    </nav>
    </header>

