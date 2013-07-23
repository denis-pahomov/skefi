<?php get_header(); ?>

<?php if(is_home()): ?>
		<div class="grid_10">
			<div id="news">
				<h2  align="left" id="h2">Мы также предлагаем:</h2>
				
			<?php
			global $more;
			$more = 0;
			//The Query
			query_posts('page_id=5');
			//The Loop
			if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div class="whatwedo">
							<?php the_content();?>
			</div>

			<?php
			endwhile; else:
			endif;
			//Reset Query
			wp_reset_query();
			?>

			</div>
		</div>
		<div class="grid_6">
			<div id="contact_main">
			<h3>Контакты</h3>
			
			
			<?php
			global $more;
			$more = 0;
			//The Query
			query_posts('page_id=21');
			//The Loop
			if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			
							<?php the_content();?>


			<?php
			endwhile; else:
			endif;
			//Reset Query
			wp_reset_query();
			?>
			</div><br />
		</div>
<?php endif; ?>
		
<?php get_footer(); ?>