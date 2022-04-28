<?php get_header();?>
<img class="img-fluid" src="<?php header_image();?>" height="<?php echo get_custom_header()->height;?>" width="<?php echo get_custom_header()->width;?>" alt=""/>
    <div class="content-area">
        <main>
           
            <section class="services">
                <div class="container">
                    <div class="row">Services</div>
                </div></section>
            <section class="middle-area">
                <div class="container">
                    <div class="row">
                       
                        <div class="news col-md-9">
                        <?php 
                        //if there are any posts
                        if(have_posts()):
                            //while have posts ,display them to us
                            while(have_posts()):the_post();
                            get_template_part('template-parts/content',get_post_format());
                            ?>
                          
                         <?php
                         endwhile;?>
                         <div class="row">
                             <div class="pages col-6 text-start">
                                 <?php previous_posts_link ("<<Newer Posts");?>
                             </div>
                             <div class="pages col-6 text-start">
                                 <?php next_posts_link("Older >>");?>
                             </div>
                         </div>
                         <?php
                        else:?>
                        <p>There is no posts </p>    
                        <?php endif;?>       
                        </div>
                         <aside class="sidebar col-md-3"><?php get_sidebar('home');?></aside>
                    </div>
                </div>
           
            </section>
            
            <section class="map">
              <script async defer src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap"></script>    
            Map1</section>
        </main>  

    </div>
  
<?php get_footer();?>