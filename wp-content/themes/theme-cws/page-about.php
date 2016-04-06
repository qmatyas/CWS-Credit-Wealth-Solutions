<?php /* Template Name: about-us  */ ?>
<?php get_header(); ?>
<?php the_post(); ?>

<section class="section-about">
	<div class="container-fluid">
		<div class="row row-eq-height">
			<div class="col-md-7 nopadding container-about">
					<div class="col-about col-about-top">
						<img class="arrow-title" src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow.png"><h2 class="block-title"><?php echo nl2br(get_post_meta(get_the_ID(),'cws_about_top_title', true)); ?></h2>
						<p>
							<?php echo nl2br(get_post_meta(get_the_ID(),'cws_about_top', true)); ?>
						</p>
					</div>
					<div class="col-about bg-color">
						<img class="arrow-title" src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow.png"><h2 class="block-title"><?php echo nl2br(get_post_meta(get_the_ID(),'cws_about_middle_title', true)); ?></h2>
						<p>
							<?php echo nl2br(get_post_meta(get_the_ID(),'cws_about_middle', true)); ?>
						</p>
					</div>
					<div class="col-about">
						<img class="arrow-title" src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow.png"><h2 class="block-title"><?php echo nl2br(get_post_meta(get_the_ID(),'cws_about_bottom_title', true)); ?></h2>
						<p>
							<?php echo nl2br(get_post_meta(get_the_ID(),'cws_about_bottom', true)); ?>
						</p>
					</div>

			</div>
			<div class="col-about-right bg-color col-md-5">
				<img class="arrow-title" src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow.png"><h2 class="block-title"><?php echo nl2br(get_post_meta(get_the_ID(),'cws_about_right_title', true)); ?></h2>
				<p>
					<?php echo nl2br(get_post_meta(get_the_ID(),'cws_about_right', true)); ?>
				</p>
			</div>
		</div>
	</div>
</section>


<?php get_footer(); ?>