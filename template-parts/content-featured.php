  <article <?php post_class(array('class'=>'featured'));?>>
  
                                
                                <div class="thumbnail">
                                      <a href="<?php the_permalink();?>"><?php the_post_thumbnail('large',array('class'=>'img-fluid'));?></a>
                                      
                                </div>
                                <a href="<?php the_permalink();?>"><h2><?php the_title();?></h2></a>
                                <div class="meta-info">
                                <?php echo get_post_format();?>
                              
                                <p>Posted inn <span><?php echo get_the_date();?></span>by<span> <?php the_author_posts_link();?></span>Categories: <span><?php the_category('');?></span><span><?php the_tags('Tags:<span>',',','</span>');?></span></p>
                                <p><?php the_excerpt();?></p>
                                </div>
                        </article>    