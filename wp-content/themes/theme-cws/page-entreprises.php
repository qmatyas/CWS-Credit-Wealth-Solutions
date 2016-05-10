<?php /* Template Name: Entreprises */ ?>
<?php get_header(); ?>
<?php the_post(); ?>
<section class="section-entreprise">
	<div class="container-fluid">
		<div class="row">
			<?php  $url_entreprises = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>
			<div class="col-md-12 nopadding block-img-template"><img class="img-entreprise" src="<?php echo $url_entreprises?>">
			</div>		
		</div>
		<div class="row row-eq-height">
			<div class="col-md-8 block-left">
				<img class="arrow-title" src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow.png">
				<h2 class="block-title link-title">
					<?php if(urlMultilang() == 'fr/' || urlMultilang() == '') :?>
					<a href="financement-complexe">
						<?php echo nl2br(get_post_meta(get_the_ID(),'cws_entreprises_top_title', true)); ?>
					</a>
					<?php elseif( urlMultilang() == 'en/') : ?>
					<a href="complex-financing">
						<?php echo nl2br(get_post_meta(get_the_ID(),'cws_entreprises_top_title', true)); ?>
					</a>
					<?php endif; ?>
				</h2>
				<div class="text-left">
					<p><?php echo nl2br(get_post_meta(get_the_ID(),'cws_entreprises_top', true)); ?></p>
				</div>
				<img class="arrow-title-entreprise" src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow.png">
				<h2 class="block-title link-title">
					<?php if(urlMultilang() == 'fr/' || urlMultilang() == '') :?>
					<a href="gestion-actifs">
						<?php echo nl2br(get_post_meta(get_the_ID(),'cws_entreprises_middle_title', true)); ?>
					</a>
					<?php elseif( urlMultilang() == 'en/') : ?>
					<a href="asset-management">
						<?php echo nl2br(get_post_meta(get_the_ID(),'cws_entreprises_middle_title', true)); ?>
					</a>
					<?php endif; ?>
				</h2>
				<div class="text-left">
					<p><?php echo nl2br(get_post_meta(get_the_ID(),'cws_entreprises_middle', true)); ?></p>
				</div>
				<img class="arrow-title-entreprise" src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow.png">
				<h2 class="block-title link-title">
					<?php if(urlMultilang() == 'fr/' || urlMultilang() == '') :?>
					<a href="banques-et-institutions-financieres">
						<?php echo nl2br(get_post_meta(get_the_ID(),'cws_entreprises_bottom_title', true)); ?>
					</a>
					<?php elseif( urlMultilang() == 'en/') : ?>
					<a href="banks-and-financial-institutions">
						<?php echo nl2br(get_post_meta(get_the_ID(),'cws_entreprises_bottom_title', true)); ?>
					</a>
					<?php endif; ?>
				</h2>
				<div class="text-left-bottom">
					<p><?php echo nl2br(get_post_meta(get_the_ID(),'cws_entreprises_bottom', true)); ?></p>
				</div>
			</div>
			<div class="col-md-4 bg-color contact-entreprise">
				<h2 class="block-title-template">Espace Entreprise</h2>
				<p class="contact-cws">
					<?php echo nl2br(get_post_meta(get_the_ID(),'cws_espace_entreprise', true)); ?>
				</p>
				<img class="img-book" src="<?php echo get_template_directory_uri(); ?>/assets/img/fond_colonne_corp_haut.png">
			</div>	
		</div>
	</div>
</section>
<?php get_footer(); ?>