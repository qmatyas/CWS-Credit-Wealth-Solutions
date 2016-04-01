<?php /* Template Name: accueil*/ ?>
<?php get_header(); ?>
<?php the_post(); ?>
<!-- <div class="container-lg hidden-md"> -->
	<section class="section-slider">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12 col-lg-12 slider single-item">
					<div><img class="img-slider" src="<?php echo get_template_directory_uri(); ?>/assets/img/fond_slider1.png"></div>
					<div><img src="http://placehold.it/1100x324"></div>
					<div><img src="http://placehold.it/1100x324"></div>
				</div>
			</div>
		</div>        
	</section>
	<section class="section-homepage">
		<div class="container-fluid">
			<div class="row row-eq-height accueil-content">
				<div class="homepage-left col-md-6">
					<h2 class="block-title">credit & wealth solutions</h2>
					<p>
						<?php echo nl2br(get_post_meta(get_the_ID(),'cws_intro_left', true)); ?>
					</p>
				</div>
				<div class="homepage-right col-md-5 col-md-offset-1">
					<h2 class="block-title">rerum omnium eadem</h2>
					<p>
						<?php echo nl2br(get_post_meta(get_the_ID(),'cws_intro_right', true)); ?>
					</p>
				</div>
			</div>
		</div>
	</section>
<!-- </div> -->

<?php get_footer(); ?>