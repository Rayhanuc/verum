
<?php
if(has_post_thumbnail()):

?>
	<div class="post-img">
	    <a href="<?php the_permalink() ?>">
	    	<?php the_post_thumbnail('verum_posts'); ?>
	    </a>
	</div>
<?php
endif;
?>