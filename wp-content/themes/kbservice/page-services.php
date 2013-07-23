<?php get_header();?>

	<div class="grid_16">
	<div  id="service_page_content">
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

		<p>Записей нет.</p>

<?php endif; ?>

		<ul id="list-service">
			
			
			
			<?php query_posts('cat=5&order=ASC'); ?>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
			<?php
			endwhile;endif;			
			wp_reset_query();?>
			
		</ul>
	
	</div> <!--eof content -->
		<?
			$price_file = '/home/kbs/www/price_kb-service-dp-ua.xls';
			if(file_exists($price_file)){ $file_date = date ("d.m.Y", filemtime($price_file)); }
		?>
		<?php if(isset($file_date)): ?>
	<div id="service_page_sidebar">
		<h3>Скачать прайс</h3>
		<a href="" title=""></a>
		<p>Обновлен: <?php print $file_date; ?></p>
	<div class="horizont"></div>
	</div> <!--eof grif_16 -->
<?php endif; ?>
<?php get_footer(); ?>
