<?php get_header();?>
    <div class="content-area">
        <main>
            <section class="slide">
                <div class="container">
                    <div class="row"><?php echo do_shortcode('[smartslider3 slider="2"]');?></div>
              </div>
            </section>
            <section class="services">
                <div class="container">
                    <?php the_post_thumbnail('medium');?>
                    <div class="row">Services</div>
                </div></section>
           
        </main>  

    </div>
  
<?php get_footer();?>