<?php  ?>
<footer>
    <?php wp_nav_menu( array(
         'menu' => 'footer',
         'container' => 'nav',
         'container_class' => 'footer-nav',
         'before' => '',
    )); ?>
    
    
        <?php wp_nav_menu( array(
            'menu' => 'social',
            'container' => 'nav',
            'container_class' => 'footer-social',
            'before' => '',
            'link_before' => '<span class="sr-only">',
            'link_after' => '</span>'
        )); ?>
    
    <p>Copyright <?php echo date('Y') ?> Elizabeth Bank</p>
</footer>
<?php wp_footer(); ?>
</body>
</html>