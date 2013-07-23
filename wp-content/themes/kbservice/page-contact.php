<?php get_header();?>



	<div class="grid_16">

	<div  id="contact_page_content">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>





		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">

			<h2><?php the_title(); ?></h2>



			<div class="entry">

				<?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>

			

			</div>

		</div>



	<?php //comments_template(); ?>



	<?php endwhile; else: ?>



		<p>Записей нет.</p>



<?php endif; ?>

	

	</div> <!--eof content -->

	<div id="page_sidebar" class="maptel">

		<table summary="Контактные даные и наше месторасположение">

			<tr>

				<td style="width:60px">Тел :</td>

				<td style="width:150px">(056) 785-56-09</td>

				<td style="width:60px;padding-left:3em;">ICQ :</td>

				<td>453-489-889</td>

			</tr>

			<tr>

				<td>Факс :</td>

				<td>(056) 794-63-40</td>

				<td style="width:60px;padding-left:3em;">e-mail :</td>

				<td>info@kb-service.dp.ua</td>

			</tr>

			<tr>

				<td colspan="4">Днепропетровск, пр. Кирова, 28а, оф. 524</td>

			</tr>

		</table>

	    <img src="http://kb-service.dp.ua/wp-content/themes/kbservice/images/map.png" width="609" height="510"  alt="пр.Кирова 28а, оф.236"/><br /><br />
        <img src="http://kb-service.dp.ua/wp-content/themes/kbservice/images/map-2.jpg" width="609" height="510"  alt="пр.Кирова 28а, оф.236"/></div>

	<div class="horizont"></div>

	</div> <!--eof grif_16 -->



<?php get_footer(); ?>

