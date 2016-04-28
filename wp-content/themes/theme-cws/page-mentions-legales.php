<?php /* Template Name: mentions legales*/ ?>
<?php get_header(); ?>
<?php the_post(); ?>
<section class="section-mentions-legales">
	<div class="container">
		<div class="row">
			<img class="arrow-title" src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow.png"><h2 class="block-title">MENTIONS LÉGALES</h2>
			<p class="col-md-12">
				<?php echo nl2br(get_post_meta(get_the_ID(),'cws_mentions_legales', true)); ?>
			</p>
		</div>
		<div class="row">
			<img class="arrow-title" src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow.png"><h2 class="block-title">LE SITE</h2>
			<p class="col-md-12">
				<?php echo nl2br(get_post_meta(get_the_ID(),'cws_site', true)); ?>
			</p>
		</div>
		<div class="row">
			<img class="arrow-title" src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow.png"><h2 class="block-title">RÉCLAMATIONS</h2>
			<p class="col-md-12">
				<?php echo nl2br(get_post_meta(get_the_ID(),'cws_reclamations', true)); ?>
			</p>
		</div>
		<div class="row">
			<img class="arrow-title" src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow.png"><h2 class="block-title">LOI INFORMATIQUE ET LIBERTÉS</h2>
			<p class="col-md-12">
				<?php echo nl2br(get_post_meta(get_the_ID(),'cws_informatique', true)); ?>
			</p>
		</div>
		<div class="row">
			<img class="arrow-title" src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow.png"><h2 class="block-title">PARAMÈTRES ET CONFIGURATION</h2>
			<p class="col-md-12">
				<?php echo nl2br(get_post_meta(get_the_ID(),'cws_parametres', true)); ?>
			</p>
		</div>
	</div>
</section>

<?php get_footer(); ?>