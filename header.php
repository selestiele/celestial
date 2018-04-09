<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
     <?php wp_head(); ?>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Liz Bank - Web Technologies</title>
</head>
<body class="generalBody">
<header class="general-header">
    
    <img src="images/logo-teal.png" id="logo-teal-header" alt="Selestiele Designs Logo">
    <section id="navMenus" class="small-menu">
          <nav id="main-navigation" class="main-nav toggled-off" role="navigation">
              <button id="menuToggle" class="menu-toggle" aria-controls="top-menu" aria-expanded="false" onclick="menuToggle()">MENU</button>

              <?php wp_nav_menu( array(
                  'menu_id' => 'main-nav'
              ));     ?>
          </nav>

          <nav class="social-nav" role="navigation">
              <?php wp_nav_menu( array(
                  'menu' => 'social',
                  'menu_id' => 'social',
                  'before' => '',
                  'link_before' => '<span class="sr-only">',
                  'link_after' => '</span>'
              )); ?>
          </nav>
    </section>

</header>