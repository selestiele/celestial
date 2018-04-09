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
<body id="homepageBody">

<header id="homepageHeader">
    <nav id="homepageNav" class="small-menu main-nav toggled-off" role="navigation">
        <button id="menuToggle" class="menu-toggle toggled-off" aria-controls="top-menu" aria-expanded="false" onclick="menuToggle()">MENU</button>
        
        <?php wp_nav_menu( array(
            'menu_class' => 'main-nav-home'
        ));     ?>
        
    </nav>
</header>
    

