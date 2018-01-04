<footer>
<?php wp_footer(); ?>
	<div class="moo-sda-footer-nav">
	<?php wp_nav_menu( array( 'theme_location' => 'footer' )); ?>
	<p> &copy; all rights reserved to <?php echo "the mount of olives sda church"." ".date("Y");?></p>
		<div class="moo-sda-footer-nav__s-media">
			<ul>
				<li><a href="#"><?php echo get_the_post_thumbnail(73); ?></a></li>
				<li><a href="#"><?php echo get_the_post_thumbnail(76); ?></a></li>
				<li><a href="#"><?php echo get_the_post_thumbnail(79); ?></a></li>
			</ul>
		</div>
	</div>	
</footer>	
</body>
</html>