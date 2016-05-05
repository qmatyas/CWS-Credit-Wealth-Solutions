<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> -->
		<footer class="footer-cws container-fluid">
			<div class="row">
				<div class="footer-content col-md-12">
					© 2016 | CWS Credit & Wealth Solutions | 
					
						<?php if(urlMultilang() == 'fr/' || urlMultilang() == ''): ?>
								<a href="mentions-legales"> Mentions légales
						<?php elseif(urlMultilang() == 'en/'): ?>
								<a href="legal-information"> Legal information
						<?php endif; ?>
					</a>
				</div>
			</div>
		</footer>
	</div> <!-- end div global container -->
</div> <!-- End div corp -->
		<script src="<?php echo get_template_directory_uri(); ?>/src/js/jquery.min.js" > </script>
		<script src="<?php echo get_template_directory_uri(); ?>/src/bootstrap/js/bootstrap.min.js"> </script>
		<script src="<?php echo get_template_directory_uri(); ?>/assets/slick/slick.min.js"> </script>
		<script src="<?php echo get_template_directory_uri(); ?>/src/js/script.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js?sensor=false&language=fr"></script>
		<?php wp_footer(); ?>
	</body>
</html>