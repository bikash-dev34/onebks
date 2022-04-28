  <article>
     
                                <h2><?php the_title();?></h2>
                                <?php the_post_thumbnail('thumbnail');?>
                                <div class="meta-info">
                                <p>Categories: <?php the_category('');?></p>
                                <p><?php the_tags('Tags:',',');?></p>
                                <p><?php the_content();?></p>
</div>
                        </article>    