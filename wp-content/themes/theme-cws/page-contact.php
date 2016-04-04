<?php /* Template Name: contact */ ?>
<?php get_header(); ?>
<?php the_post(); ?>
<section class="section-contact">
	<div class="container-fluid">
		<div class="row">
			<h2 class="title-contact">CONTACT</h2>
			<div class="col-md-6 contact-content">
				<p>
					<?php echo nl2br(get_post_meta(get_the_ID(),'cws_contact', true)); ?>
				</p>
			</div>
		</div>
	</div>
</section>
<section class="section-formulaire">
	<div class="container-fluid">
		<div class="row">
			<h2 class="block-title-contact">Formulaire de contact</h2>
			<div class="col-md-12">
				<form class="form-horizontal form-contact">
					<div class="form-group">
					    <label class="col-sm-2 col-sm-offset-1 control-label">Nom & Prenom | Entreprise</label>
					    <div class="col-sm-6">
					      <input type="email" class="form-control">
					    </div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 col-sm-offset-1 control-label">Votre Email</label>
						<div class="col-sm-6">
						  <input type="email" class="form-control">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 col-sm-offset-1 control-label">Votre message</label>
						<div class="col-sm-6">
						  <textarea class="form-control" rows="5"></textarea>
						</div>
					</div>
					</div>
					<div class="form-group">
						<div class="contact-btn">
						  <button type="submit" class="btn btn-default">Envoyer</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>