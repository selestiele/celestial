<?php
get_header('home');
?>
<main>    
    <img id="homepageLogo" src="<?php echo get_template_directory_uri(); ?>/images/logowhite.png" alt="Selestiele Designs Logo">
    <h1 class="sr-only">Selestiele Designs</h1>
    <img id="homepageTitle" src="<?php echo get_template_directory_uri(); ?>/images/logoname.png" alt="Selestiele Designs">
    <p id="homepageDesc"><?php $blog_description = get_bloginfo('description'); ?></p>
</main>    

