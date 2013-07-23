<!-- FOOTER -->
<div id="footer" class="clearfix">
    <div id="links">
        <?php
        wp_nav_menu(
            array(
                'container_class' => '',
                'container_id' => 'new_footer_menu',
                'menu' => 'Footer menu',
                'menu_class' => 'menu_items_list',
            ));
        ?>
        <div class="clear"></div>
    </div>
    <div class="footer_logo">
        <?php if ($attachId = get_field('footer_logo', 'options')) { ?>
        <img src="<?php print array_shift(wp_get_attachment_image_src($attachId));?>" alt=""/>
        <?php }?>
    </div>
    <div id="adress">
        <?php the_field('addres_field', 'options');?>
    </div>
</div>
<div class="clear"></div>

</div> <!--eof container_12-->

<div class="clear"></div>

</div>


<?php wp_footer(); ?>
</body>

</html>