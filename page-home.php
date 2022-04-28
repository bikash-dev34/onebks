<?php get_header();?>
<img class="img-fluid" src="<?php header_image();?>" height="<?php echo get_custom_header()->height;?>" width="<?php echo get_custom_header()->width;?>" alt=""/>
    <div class="content-area">
        <main>
             <section class="slide">
                <div class="container">
                      <div class="row"><?php echo do_shortcode('[smartslider3 slider="2"]');?></div>
                </div></section>
             <section class="services">
                <div class="container">
                    <h1>Our Services</h1>
                    <div class="row">
                        <div class="col-sm-4">
                        <div class="services-item">
                            <?php 
                            if(is_active_sidebar('services-1')){
                                dynamic_sidebar('services-1');
                            }
                            ;?>
                        </div>
                    </div>
                     <div class="col-sm-4">
                        <div class="services-item">
                             <?php 
                            if(is_active_sidebar('services-2')){
                                dynamic_sidebar('services-2');
                            }
                            ;?>
                        </div>
                    </div>
                     <div class="col-sm-4">
                        <div class="services-item">
                             <?php 
                            if(is_active_sidebar('services-3')){
                                dynamic_sidebar('services-3');
                            }
                            ;?>
                        </div>
                    </div>
                   </div>
                   
                </div></section>
            <section class="middle-area">
                <div class="container">
                    <div class="row">
                        <aside class="sidebar col-md-4 h-100"><?php get_sidebar('home');?></aside>
                        
                            <div class="news col-md-8">
                                <div class="container">
                                    <h1>Latest News Info</h1>
                            <div class="row">
                            <?php 
                            $featured=new WP_Query('post_type=post&posts_per_page=1&cat=4,12');   
                            if($featured->have_posts()):
                                while($featured->have_posts()):$featured->the_post();
                               ?>
                               <div class="col-12">
                                  <?php get_template_part('template-parts/content','featured');?>
                               </div>
                               <?php 
                            endwhile;
                            wp_reset_postdata();
                        endif;    
                        //second loop
                        $args=array(
                            'post_type'=>'post',
                            'posts_per_page'=>2,
                            'category__not_in'=>array(12),
                            'category__in'=>array(4,11),
                            //ignore repetition
                            'offset'=>1
                        );
                         $secondary=new WP_Query('args');   
                            if($secondary->have_posts()):
                                while($secondary->have_posts()):$secondary->the_post();
                               ?>
                               <div class="col-sm-6">
                                  <?php get_template_part('template-parts/content','secondary');?>
                               </div>
                               <?php 
                            endwhile;
                            wp_reset_postdata();
                        endif;    
                        ;?>                    
                           
                        </div>
                            
                       <p>There publish news section</p>    
                    </div>
                    </div>
                         
                    </div>
                </div>
           
            </section>
            
           	<section class="map">
						<iframe
  width="600"
  height="450"
  style="border:0"
  loading="lazy"
  allowfullscreen
  referrerpolicy="no-referrer-when-downgrade"
  src="https://www.google.com/maps/embed/v1/place?key=API_KEY
    &q=Space+Needle,Seattle+WA">
</iframe>					
			</section>
        </main>  

    </div>
  
<?php get_footer();?>