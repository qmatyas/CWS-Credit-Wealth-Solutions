<?php /* Template Name: contact */ ?>
<?php get_header(); ?>
<?php the_post(); ?>

<div class="section-contact">
	<div class="container-fluid">
		<div id="map-canvas" class="row map-contact"></div>
		<div class="row map-filter"></div>
		<div class="row">
			<h2 class="title-contact"><?php echo nl2br(get_post_meta(get_the_ID(),'cws_contact_title', true)); ?></h2>
			<div class="contact-content">
				<p>
					<?php echo nl2br(get_post_meta(get_the_ID(),'cws_contact', true)); ?>
				</p>
			</div>
		</div>
	</div>
</div>

<?php 

$form_send = false;

if(isset($_POST['message']) AND isset($_POST['email'])){
	$objet = $_POST['objet'];
    $mail = '';

    foreach ($_POST as $key => $value) {
    	$mail .= $key . ' : ' . $value . PHP_EOL;
    }

    if(wp_mail('qmatyas@gmail.com', $objet, $mail)){
    	$form_send = true;
    }
}
?>

<section class="section-formulaire">
	<div class="container-fluid">
		<div class="row">
			<h2 class="block-title-contact">Formulaire de contact</h2>
			<div class="col-md-12">
				<?php if($form_send) : ?>
					<div class="alert alert-success" role="alert">Merci de votre intérêt. Nous vous recontacterons très prochainement.</div>
				<?php else : ?>
					<form class="form-horizontal form-contact" action="" method="post">
						<div class="form-group">
						    <label for="inputName" class="col-sm-2 col-sm-offset-1 control-label">Nom & Prenom | Entreprise</label>
						    <div class="col-sm-6">
						      <input type="text" class="form-control" id="inputName" name="contact_name">
						    </div>
						</div>
						<div class="form-group">
							<label for="inputEmail" class="col-sm-2 col-sm-offset-1 control-label">Votre Email</label>
							<div class="col-sm-6">
							  <input type="email" id="inputEmail" name="email" class="form-control">
							</div>
						</div>
						<div class="form-group">
							<label for="inputObjet" class="col-sm-2 col-sm-offset-1 control-label">Objet</label>
							<div class="col-sm-6">
							  <input type="text" id="inputObjet" name="objet" class="form-control">
							</div>
						</div>
						<div class="form-group">
							<label for="inputMessage" class="col-sm-2 col-sm-offset-1 control-label">Votre message</label>
							<div class="col-sm-6">
							  <textarea class="form-control" rows="5" id="inputMessage" name="message"></textarea>
							</div>
						</div>
						</div>
						<div class="form-group">
							<div class="contact-btn">
							  <button type="submit" class="btn btn-style">Envoyer</button>
							</div>
						</div>
					</form>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>