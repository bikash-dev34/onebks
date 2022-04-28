 <article>
                                <a href="<?php the_permalink();?>"><h2><?php the_title();?></h2></a>
                                <p>by <?php the_author_posts_link();?></p>
                                <?php if(has_category());?>
                                <p>Categories: <?php the_category('');?></p>
                                
                                <p><?php the_tags('Tags:',',');?></p>
                                <p><?php the_excerpt();?></p>
                        </article>    