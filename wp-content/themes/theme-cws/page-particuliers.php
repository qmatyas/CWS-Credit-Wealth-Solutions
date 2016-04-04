<?php /* Template Name: Particuliers */ ?>
<?php get_header(); ?>
<?php the_post(); ?>
<section class="section-entreprise">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 nopadding block-img-template"><img class="img-entreprise" src="<?php echo get_template_directory_uri(); ?>/assets/img/fond_priv_haut.jpg">
			</div>		
		</div>
		<div class="row row-eq-height">
			<div class="col-md-8 block-left">
				<img class="arrow-title" src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow.png"><h2 class="block-title">CONSEIL EN RECHERCHE DE FINANCEMENT COMPLEXE</h2>
				<p class="text-left">
					<?php echo nl2br(get_post_meta(get_the_ID(),'cws_particuliers_top', true)); ?>
				</p>
				<img class="arrow-title" src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow.png"><h2 class="block-title">CONSEIL EN GESTION D'ACTIFS</h2>
				<p class="text-left">
					<?php echo nl2br(get_post_meta(get_the_ID(),'cws_particuliers_middle', true)); ?>
				</p>
				<img class="arrow-title" src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow.png"><h2 class="block-title">CONSEIL POUR BANQUE ET INSTITUTIONS FINANCIÈRES</h2>
				<p class="text-left-bottom">
					<?php echo nl2br(get_post_meta(get_the_ID(),'cws_particuliers_bottom', true)); ?>
				</p>
			</div>
			<div class="col-md-4 bg-color contact-entreprise">
				<h2 class="block-title-template">Espace Patrimoine</h2>
				<p class="contact-cws"><?php echo nl2br(get_post_meta(get_the_ID(),'cws_espace_patrimoine', true)); ?></p>
				<img class="img-book" src="<?php echo get_template_directory_uri(); ?>/assets/img/fond_colonne_corp_haut.png">
			</div>	
		</div>
	</div>
</section>
<?php get_footer(); ?>