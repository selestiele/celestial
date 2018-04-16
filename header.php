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
<header class="general-header" role="banner">
    
    <a href="<?php get_home_url(); ?>"><div id="logo-teal-header"><p class="sr-only">Selestiele Designs Home</p></div></a>
    <section id="navMenus" class="small-menu">
          <nav id="main-navigation" class="main-nav toggled-off" role="navigation">
              <!--<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="" aria-expanded="false" aria-label="Toggle navigation">MENU</button>-->

              <?php wp_nav_menu( array(
                   'theme_location' => 'main',
                   'menu_id' => 'main-nav',
                   //'container_id' => 'main-navbar',
                   //'container_class' => 'collapse navbar-collapse',
                   //'menu_class' => 'nav navbar-nav navbar-right'
              ));     ?>
          </nav>

          <nav class="social-nav" role="navigation">
              <?php wp_nav_menu( array(
                  'theme_location' => 'social',
                  'menu_id' => 'social',
                  'before' => '',
                  'link_before' => '<span class="sr-only">',
                  'link_after' => '</span>'
              )); ?>
          </nav>
    </section>
    
</header>