<?php get_header();?>
<div id="primary">
    <div id="main">
        <div class="container">
            <h3>Search results for :<?php echo get_search_query();?></h3>
            <?php 
            get_search_form();
             while(have_posts()):
                the_post();
               get_template_part('template-parts/content','search');
            //    comments
            if(comments_open()|| get_comments_number()):
                comments_template();
            endif;    
             endwhile;  
             //paginations
             the_posts_pagination(
                 array(
                     'prev_text'=>'Previous',
                     'next_text'=>'Next'
                 )
                 );
            ?>
        </div>
    </div>
</div>


<?php get_footer();?>