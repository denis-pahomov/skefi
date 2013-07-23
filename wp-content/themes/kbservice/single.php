<?php get_header();

foreach((get_the_category()) as $category) { 
    $my_cat = $category->cat_ID; 
} 

?>

	<div class="grid_16">
	<div id="<?if($my_cat == 3):?>page_content<?else:?>service-look<?endif;?>">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<h1 class="h_3"><strong><?php the_title(); ?></strong></h1>

			<div class="entry">
				<?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>

				<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
				<?php the_tags( '<p>Tags: ', ', ', '</p>'); ?>

			</div>
		</div>

	<?php //comments_template(); ?>

	<?php endwhile; else: ?>

		<p>Записей нет.</p>

<?php endif; ?>
	
	</div> <!--eof content -->
	

	<?php 


if($my_cat == 3):?>
<div id="single_sidebar">
	<div id="single_sidebar">
		<h2>Статьи</h2>
		<ul id="list_article">
			<?php
			global $more;
			$more = 0;
			//The Query
			query_posts('cat=3&orderby=date');
			//The Loop
			if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<li><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></li>
			<?php
			endwhile; else:
			endif;wp_reset_query();
			?>
		</ul>
	</div>
</div>
<?php endif; ?>

	<div class="horizont"></div>
	</div> <!--eof grif_16 -->

<?php get_footer(); ?>
