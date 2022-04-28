<footer>
    <div class="container">
        <div class="row">
            <div class="copyright col-sm-7 col-md-4 col-md-4">
                <!-- customize.php file ko taane ko and dispaly gareko  -->
                <p><?php echo get_theme_mod('set_copyright');?></p>
        </div>
        <nav class="footer-menu col-sm-5 col-8 text-end">
            <?php wp_nav_menu(array('theme_location'=>'my_footer_menu'));?>
        </nav>
    </div>
    <h1>footer</h1>

</footer>
<?php wp_footer();?>