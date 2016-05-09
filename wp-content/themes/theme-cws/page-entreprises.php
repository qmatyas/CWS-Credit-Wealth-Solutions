<?php /* Template Name: Entreprises */ ?>
<?php get_header(); ?>
<?php the_post(); ?>
<section class="section-entreprise">
	<div class="container-fluid">
		<div class="row">
			<?php  $url_entreprises = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>
			<div class="col-md-12 nopadding block-img-template"><img class="img-entreprise" src="<?php echo $url_entreprises?>"></div>
		</div>
		<div class="row row-eq-height">
			<div class="col-md-8 block-left">
				<img class="arrow-title" src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow.png"><h2 class="block-title"><?php echo nl2br(get_post_meta(get_the_ID(),'cws_entreprises_top_title', true)); ?></h2>
				<div class="text-left">
					<p><?php echo nl2br(get_post_meta(get_the_ID(),'cws_entreprises_top', true)); ?></p>
					<?php if(urlMultilang() == 'fr/' || urlMultilang() == '') : ?>
					<div class="btn btn-danger btn-red"><a href="financement-complexe">En savoir plus</a></div>
					<?php elseif( urlMultilang() == 'en/') : ?>
					<div class="btn btn-danger btn-red"><a href="complex-financing">More</a></div>
					<?php endif; ?>
				</div>
				
				<img class="arrow-title" src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow.png"><h2 class="block-title"><?php echo nl2br(get_post_meta(get_the_ID(),'cws_entreprises_middle_title', true)); ?></h2>
				<div class="text-left">
					<p><?php echo nl2br(get_post_meta(get_the_ID(),'cws_entreprises_middle', true)); ?></p>
					<?php if(urlMultilang() == 'fr/' || urlMultilang() == '') : ?>
					<div class="btn btn-danger btn-red"><a href="gestion-actifs">En savoir plus</a></div>
					<?php elseif( urlMultilang() == 'en/') : ?>
					<div class="btn btn-danger btn-red"><a href="asset-management">More</a></div>
					<?php endif; ?>
				</div>
				<img class="arrow-title" src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow.png"><h2 class="block-title"><?php echo nl2br(get_post_meta(get_the_ID(),'cws_entreprises_bottom_title', true)); ?></h2>
				<div class="text-left-bottom">
					<p><?php echo nl2br(get_post_meta(get_the_ID(),'cws_entreprises_bottom', true)); ?></p>
					<?php if(urlMultilang() == 'fr/' || urlMultilang() == '') : ?>
					<div class="btn btn-danger btn-red"><a href="banques-et-institutions-financieres">En savoir plus</a></div>
					<?php elseif( urlMultilang() == 'en/') : ?>
					<div class="btn btn-danger btn-red"><a href="banks-and-financial-institutions">More</a></div>
					<?php endif; ?>
				</div>
			</div>
			<div class="col-md-4 bg-color contact-entreprise">
				<h2 class="block-title-template"><?php echo nl2br(get_post_meta(get_the_ID(),'cws_espace_patrimoine_title', true)); ?></h2>
				<p class="contact-cws"><?php echo nl2br(get_post_meta(get_the_ID(),'cws_espace_patrimoine', true)); ?></p>
				<img class="img-book" src="<?php echo get_template_directory_uri(); ?>/assets/img/fond_colonne_corp_haut.png">
			</div>	
		</div>
	</div>
</section>
<?php get_footer(); ?>