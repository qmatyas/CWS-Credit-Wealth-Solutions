<?php /* Template Name: Recherche et constitution d'un patrimoine artistique*/ ?>
<?php get_header(); ?>
<?php the_post(); ?>
<section class="section-entreprise">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 nopadding block-img-template"><img class="img-entreprise" src="<?php echo get_template_directory_uri(); ?>/assets/img/fond_priv3.jpg">

			</div>		
		</div>
		<div class="row row-eq-height">
			<div class="col-md-8 block-left">
				<h2 class="block-title-template">RECHERCHE ET CONSTITUTION D'UN PATRIMOINE ARTISTIQUE</h2>
				<p class="text-left">
					<?php echo nl2br(get_post_meta(get_the_ID(),'cws_patrimoine_artistique', true)); ?>
				</p>
			</div>
			<div class="col-md-4 bg-color contact-entreprise">
				<h2 class="block-title-template">Espace Entreprise</h2>
				<p class="contact-cws">
					<?php echo nl2br(get_post_meta(get_the_ID(),'cws_espace_patrimoine_artistique', true)); ?>
				</p>
				<img class="img-book" src="<?php echo get_template_directory_uri(); ?>/assets/img/contact-entreprise.png">
			</div>	
		</div>
	</div>
</section>



<?php get_footer(); ?>