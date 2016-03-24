<?php /* Template Name: entreprises */ ?>
<?php get_header(); ?>
<?php the_post(); ?>
<section class="section-entreprise">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-8 nopadding block-img"><img class="img-entreprise" src="<?php echo get_template_directory_uri(); ?>/assets/img/fond_corp1.jpg"></div>
			<div class="col-md-4">
				<h2 class="block-title">Espace Entreprise</h2>
				<ul>
					<li class="link-entreprise"><a href="#">Conseil pour la gestion d'actifs</a></li>
					<li class="link-entreprise"><a href="#">Banques et institutions financières</a></li>
				</ul>
				<p class="contact-cws"><a href="#">Contacter CWS | CREDIT & WEALTH SOLUTIONS pour l'établissement d'une lettre de mission</a></p>
				<img class="img-book" src="<?php echo get_template_directory_uri(); ?>/assets/img/contact-entreprise.png">
			</div>			
		</div>
		<div class="row row-finance">
			<div class="col-md-6 col-md-offset-3 search-finance">
				<h2 class="block-title-template">CONSEIL EN RECHERCHE DE FINANCEMENT COMPLEXE</h2>
				<p class="text-finance">
					Quam ob rem vita quidem talis fuit vel fortuna vel gloria, ut nihil posset accedere, moriendi autem sensum celeritas abstulit; quo de genere mortis difficile dictu est; quid homines suspicentur, videtis; hoc vere tamen licet dicere, P. Scipioni ex multis diebus, quos in vita celeberrimos laetissimosque viderit, illum diem clarissimum fuisse, cum senatu dimisso domum reductus ad vesperum est a patribus conscriptis, populo Romano, sociis et Latinis, pridie quam excessit e vita, ut ex tam alto dignitatis gradu ad superos videatur deos potius quam ad inferos pervenisse. <br>
					Haec dum oriens diu perferret, caeli reserato tepore Constantius consulatu suo septies et Caesaris ter egressus Arelate Valentiam petit, in Gundomadum et Vadomarium fratres Alamannorum reges arma moturus, quorum crebris excursibus vastabantur confines limitibus terrae Gallorum.
				</p>
			</div>
		</div>
	</div>
</section>



<?php get_footer(); ?>