<?php
/** Template Name: Main Page */
get_header(); ?>
<div class="content clearfix">
    <div class="news">
        <?php
        global $more;
        $more = 0;
        if (have_posts()) :
            the_post(); ?>
            <h2>Чем мы занимаемся</h2>
            <div class="whatwedo">
                <?php the_content();?>
            </div>
            <?php endif;?>
    </div>
    <div class="small_news">
        <h2>Новости</h2>
        <?php
        global $more;
        $more = 0;
        //The Query
        query_posts('cat=1&posts_per_page=3');
        //The Loop
        if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="small_news">
                <h3><?php the_title(); ?></h3>
                <?php the_content();?>
            </div>

            <?php
        endwhile;
        endif;
        //Reset Query
        wp_reset_query();
        ?>
    </div>
</div>
<?php get_footer(); ?>