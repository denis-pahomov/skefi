<?php get_header();?>
	<div class="grid_16">
	<div  id="single_page_content">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<h2><?php the_title(); ?></h2>

			<div class="entry">
				<?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>

				<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
				<?php the_tags( '<p>Tags: ', ', ', '</p>'); ?>
			
			</div>
		</div>

	<?php //comments_template(); ?>

	<?php endwhile; else: ?>

		<p> .</p>

<?php endif; ?>
	
	</div> <!--eof content -->
	<div id="page_sidebar">

	</div>
	<div class="horizont"></div>
	</div> <!--eof grif_16 -->

<?php get_footer(); ?>
