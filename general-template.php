
<!-- Template Name:General Template 
-->


<?php get_header();?>
<img class="img-fluid" src="<?php header_image();?>" height="<?php echo get_custom_header()->height;?>" width="<?php echo get_custom_header()->width;?>" alt=""/>
    <div class="content-area">
        <main>
               <section class="middle-area">
                <div class="container">
                    <div class="row">
                        <aside class="sidebar col-md-3"><?php get_sidebar('blog');?></aside>
                        <div class="news col-md-9">
                        <?php 
                        //if there are any posts
                        if(have_posts()):
                            //while have posts ,display them to us
                            while(have_posts()):the_post();
                            ?>
                            <article>
                                <a href="<?php the_permalink();?>"> <h2><?php the_title();?></h2></a>
                               <a href="<?php the_permalink();?>"> <?php the_post_thumbnail('thumbnail'); ?>
                                <p>Posted in <?php echo get_the_date();?>by <?php the_author_posts_link();?></p></a>
                              
                                
                                <p>Categories: <?php the_category('');?></p>
                                <p><?php the_tags('Tags:',',');?></p>
                                <p><?php the_content();?></p>
                        </article>    
                         <?php
                         endwhile;
                        else:?>
                        <p>There is no posts </p>    
                        <?php endif;?>       
                        </div>
                        
                    </div>
                </div>
           
            </section>
            
         </main>  

    </div>
  
<?php get_footer();?>