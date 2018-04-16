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
<body class="homepageBody">

<header id="homepageHeader">
    <nav id="homepageNav" class="small-menu main-nav" role="navigation">
<!--        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#" aria-controls="" aria-expanded="false" aria-label="Toggle navigation">Menu</button>
        -->
        <?php wp_nav_menu( array(
             'theme_location' => 'main',
             'menu_class' => 'main-nav-home'
        ));     ?>
        
    </nav>
</header>
    

