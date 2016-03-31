<?php /* Template Name: contact */ ?>
<?php get_header(); ?>
<?php the_post(); ?>
<section class="section-contact">
	<div class="container-fluid">
		<div class="row">
			<h2 class="title-contact">CONTACT</h2>
			<div class="col-md-6 contact-content">
				<p>
					Pour toute demande écrite, veuillez adresser votre courrier à : 

					<br><br>CREDIT & WEALTH SOLUTIONS 
					<br>21 Boulevard Haussmann 
					<br>75009 PARIS - FRANCE

					<br><br>Vous pouvez nous contacter par téléphone aux : 

					<br><br>01 60 14 40 98 pour le standard 
					<br>06 78 63 01 78 pour le mobile 
					<br>Depuis l'étranger, veuillez entrer l'indicatif +33

					<br><br>Vous pouvez également nous contacter via votre messagerie : 

					<br><br>Pour toute demande d'information : INFO@CREDITWEALTHSOLUTIONS.COM 
					<br>Pour toute question relative au site internet : POSTMASTER@CREDITWEALTHSOLUTIONS.COM
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