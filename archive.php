<?php get_header();?>
<img class="img-fluid" src="<?php header_image();?>" height="<?php echo get_custom_header()->height;?>" width="<?php echo get_custom_header()->width;?>" alt=""/>
    <div class="content-area">
        <main>
           
            
            <section class="middle-area">
                <div class="container">
                    <div class="row">
                       
                        <div class="archive col-md-9">
                        <?php 
                         the_archive_title('<h1 class="archive-title">','</h1>');
                        //if there are any posts
                        if(have_posts()):
                            //while have posts ,display them to us
                            while(have_posts()):the_post();
                            // get_template_part('template-parts/content',get_post_format());
                            get_template_part(
                                'template-parts/content','archive'
                            )
                            ?>
                          
                         <?php
                         endwhile;?>
                         <div class="row">
                             <div class="pages col-md-6 text-start">
                                 <?php previous_posts_link ("<<Newer Posts");?>
                             </div>
                             <div class="pages col-md-6 text-start">
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
            
            <section class="map">Map</section>
        </main>  

    </div>
  
<?php get_footer();?>