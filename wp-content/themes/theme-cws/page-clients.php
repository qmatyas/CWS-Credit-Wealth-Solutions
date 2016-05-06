<?php /* Template Name: clients et partenaires */ ?>
<?php get_header(); ?>
<?php the_post(); ?>
<section class="section-client">
	<div class="container-fluid">
		<div class="row">
			<?php  $url_entreprises = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>
			<div class="col-md-12 nopadding"><img class="img-client" src="<?php echo $url_entreprises?>">
		</div>
	</div>
</section>

<?php get_footer(); ?>