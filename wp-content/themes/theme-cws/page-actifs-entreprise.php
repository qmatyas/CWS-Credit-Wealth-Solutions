<?php /* Template Name: gestion actifs entreprise */ ?>
<?php get_header(); ?>
<?php the_post(); ?>
<section class="section-entreprise">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 nopadding block-img-template"><img class="img-entreprise" src="<?php echo get_template_directory_uri(); ?>/assets/img/fond_corp2.jpg">

			</div>		
		</div>
		<div class="row row-eq-height">
			<div class="col-md-8 block-left">
				<h2 class="block-title-template">CONSEIL EN GESTION D'ACTIFS</h2>
				<p class="text-left">
					<?php echo nl2br(get_post_meta(get_the_ID(),'cws_actif_entreprise', true)); ?>
				</p>
			</div>
			<div class="col-md-4 bg-color contact-entreprise">
				<h2 class="block-title-template">Espace Entreprise</h2>
				<p class="contact-cws"><?php echo nl2br(get_post_meta(get_the_ID(),'cws_espace_actif', true)); ?></p>
				<img class="img-book" src="<?php echo get_template_directory_uri(); ?>/assets/img/contact-entreprise.png">
			</div>	
		</div>
	</div>
</section>
<?php get_footer(); ?>