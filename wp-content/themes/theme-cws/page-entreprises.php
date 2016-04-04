<?php /* Template Name: Entreprises */ ?>
<?php get_header(); ?>
<?php the_post(); ?>
<section class="section-entreprise">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 nopadding block-img-template"><img class="img-entreprise" src="<?php echo get_template_directory_uri(); ?>/assets/img/fond_corp_haut.jpg">
			</div>		
		</div>
		<div class="row row-eq-height">
			<div class="col-md-8 block-left">
				<img class="arrow-title" src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow.png"><h2 class="block-title">CONSEIL EN RECHERCHE DE FINANCEMENT COMPLEXE</h2>
				<p class="text-left">
					<?php echo nl2br(get_post_meta(get_the_ID(),'cws_entreprises_top', true)); ?>
				</p>
				<img class="arrow-title-entreprise" src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow.png"><h2 class="block-title">CONSEIL EN GESTION D'ACTIFS</h2>
				<p class="text-left">
					<?php echo nl2br(get_post_meta(get_the_ID(),'cws_entreprises_middle', true)); ?>
				</p>
				<img class="arrow-title-entreprise" src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow.png"><h2 class="block-title">CONSEIL POUR BANQUE ET INSTITUTIONS FINANCIÈRES</h2>
				<p class="text-left-bottom">
					<?php echo nl2br(get_post_meta(get_the_ID(),'cws_entreprises_bottom', true)); ?>
				</p>
			</div>
			<div class="col-md-4 bg-color contact-entreprise">
				<h2 class="block-title-template">Espace Entreprise</h2>
				<p class="contact-cws"><a href="#">
					<?php echo nl2br(get_post_meta(get_the_ID(),'cws_espace_entreprise', true)); ?>
				</p>
				<img class="img-book" src="<?php echo get_template_directory_uri(); ?>/assets/img/fond_colonne_corp_haut.png">
			</div>	
		</div>
	</div>
</section>
<?php get_footer(); ?>