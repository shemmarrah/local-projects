<div class="footer2">
<?php wp_footer(); ?>
	<div class="sf-footer-nav">
	<?php wp_nav_menu( array( 'theme_location' => 'sf2-footer' )); ?>
	<p> &copy; all rights reserved to <?php echo "silvana fazzalari"." ".date("Y");?></p>
		<div class="sf-footer-nav__s-media">
			<ul>
				<li><a href="#"><?php echo get_the_post_thumbnail(99); ?></a></li>
				<li><a href="#"><?php echo get_the_post_thumbnail(107); ?></a></li>
				<li><a href="#"><?php echo get_the_post_thumbnail(109); ?></a></li>
			</ul>
		</div>
	</div>	

</div>	
</body>
</html>