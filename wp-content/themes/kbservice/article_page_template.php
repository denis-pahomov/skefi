<?php
/** Template Name: Article Page */
get_header();
the_post();
?>

<div class="grid_16">

    <div id="cat_page_sidebar">
        <h2><?php the_title();?></h2>
        <ul id="list_article">
            <?php
            global $more;
            $more = 0;
            //The Query
//			query_posts('cat=3&orderby=date');
            $articles = new WP_Query(array(
                'paged' => max(1, get_query_var('paged')),
                'post_type' => 'post',
                'category_name' => 'article',
                'posts_per_page' => -1,
                'order' => 'DESC',
                'orderby' => 'date'
            ));
            //The Loop
            if ($articles->have_posts()) : while ($articles->have_posts()) : $articles->the_post(); ?>
                <li><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></li>
                <?php
            endwhile; endif;
            //Reset Query
            wp_reset_query();
            ?>
        </ul>
    </div>

    <div id="page_content">
        <div id="read_article">
            <?php
            //The Query
            query_posts('cat=3&posts_per_page=1&orderby=date');

            $articles = new WP_Query(array(
                'paged' => max(1, get_query_var('paged')),
                'post_type' => 'post',
                'category_name' => 'article',
                'posts_per_page' => 1,
                'order' => 'DESC',
                'orderby' => 'date'
            ));
            //The Loop
            if ($articles->have_posts()) : while ($articles->have_posts()) : $articles->the_post(); ?>

                <h3><?php the_title(); ?></h3>
                <?php the_content(); ?>


                <?php
            endwhile;
            endif;
            //Reset Query
            wp_reset_query();
            ?>
        </div>

    </div>
    <!--eof content -->

    <div class="horizont"></div>
</div> <!--eof grif_16 -->

<?php get_footer(); ?>
