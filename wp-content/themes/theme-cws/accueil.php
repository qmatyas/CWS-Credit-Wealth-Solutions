<?php /* Template Name: accueil*/ ?>
<?php get_header(); ?>
<?php the_post(); ?>

	<section class="section-slider">
		<div class="container-fluid">	
			<div class="row">
				<?php  $url_entreprises = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>
			<div class="col-md-12 nopadding block-img-template"><img class="img-entreprise" src="<?php echo $url_entreprises?>"></div>
			</div>
		</div>		       
	</section>
	<section class="section-homepage">
		<div class="container-fluid">	
			<div class="row row-eq-height accueil-content">
				<div class="homepage-left col-md-6">
					<h2 class="block-title"><?php echo nl2br(get_post_meta(get_the_ID(),'cws_intro_left_title', true)); ?></h2>
					<p>
						<?php echo nl2br(get_post_meta(get_the_ID(),'cws_intro_left', true)); ?>
					</p>
				</div>
				<div class="homepage-right col-md-5 col-md-offset-1">
					<div class="homepage-filter"></div>
					<div class="container-home-right">
						<h2 class="block-title title-home-right"><?php echo nl2br(get_post_meta(get_the_ID(),'cws_intro_right_title', true)); ?></h2>
						<p>
							<?php echo nl2br(get_post_meta(get_the_ID(),'cws_intro_right', true)); ?>
						</p>
					</div>					
				</div>
			</div>
		</div>
	</section>
<!-- </div> -->

<?php get_footer(); ?>