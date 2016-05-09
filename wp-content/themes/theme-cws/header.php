<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" hola_ext_inject="disabled">
	<head>   
	 	<title>
	 	</title>   
 		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">	
    	
    	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?> /assets/img/favicon.png">
    	<link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?> /assets/img/favicon.ico">
    	<link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet">
    	<link href="<?php echo get_template_directory_uri(); ?>/src/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    	<link href="<?php echo get_template_directory_uri(); ?>/src/slick/slick.css" rel="stylesheet">
    	<link href="<?php echo get_template_directory_uri(); ?>/src/slick/slick-theme.css" rel="stylesheet">
    	<?php wp_head(); ?>
	    <!--[if lt IE 9]>
	      <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
	      <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
	    <![endif]-->
    
	</head> 
	 <body <?php body_class(); ?>>
	 <div class="global-corp">
		 <div class="global-container">
			 <header>
			 	<div class="container-fluid">
			 		<div class="row header-cws">
				 		<div class="banner-social-media">
				 			
					 		<div class="social-media">
					 		<?php if(urlMultilang() == 'fr/' || urlMultilang() == '') : ?>
					 		L'excellence dans votre financement
					 		<?php elseif( urlMultilang() == 'en/') : ?>
					 		Excellence in your financing
					 	<?php endif; ?>
					 	<?php 
			 				$home_url = get_home_url(); 
			 				if (preg_match('^/fr^', $home_url) == true){
			 					$home_url_fr = $home_url;
			 					$home_url_en = preg_replace('^/fr^', '/en/', $home_url);
			 				} elseif (preg_match('^/en^', $home_url) == true) {
			 					$home_url_fr = preg_replace('^/en^', '/fr/', $home_url);
			 					$home_url_en = $home_url;
			 				}
			 			?>
					 			<a class="media-lang" href="<?php echo $home_url_fr; ?>"><img class="media-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/fr.png" title="français" alt="fr"></a>
					 			<a class="media-lang" href="<?php  echo $home_url_en; ?>"><img class="media-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/uk.png" title="english" alt="en"></a>
					 		</div>
					 	</div>
					 	<a href="accueil"><img class="logo-cws" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo_cws_crop.png"></a>
				 		<h1 class="banner-title hidden-xs">credit & wealth solutions</h1>
					 	<nav class="navbar">
						  <div class="container-nav">
						    <div class="navbar-header">
						      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#cws-navbar" aria-expanded="false">
						        <span class="sr-only">Toggle navigation</span>
						        <span class="icon-bar"></span>
						        <span class="icon-bar"></span>
						        <span class="icon-bar"></span>
						      </button>

						    </div>
						    <div class="collapse navbar-collapse" id="cws-navbar">
						    <?php if(urlMultilang() == 'fr/' || urlMultilang() == '') : ?>
						      <ul class="nav navbar-nav">
						        <li class="nav-item"><a href="accueil">Accueil<span class="sr-only">(current)</span></a></li>
						        <li class="nav-item"><a href="qui-sommes-nous">qui sommes-nous</a></li>
						        <li class="dropdown">
						          <a class="dropdown-toggle dropdown-particulier">particuliers<span class="caret"></span></a>
						          <ul class="dropdown-menu">
						          	<li class="drop-item"><a class="drop-link visible-xs" href="particuliers">Particuliers</a></li>
						            <li class="drop-item"><a class="drop-link" href="financement-projets-immobiliers">Recherche de Financement <br>des projets immobiliers</a></li>
						            <li class="drop-item"><a class="drop-link" href="gestion-actifs-financiers">gestion d'actifs financiers</a></li>
						            <li class="drop-item"><a class="drop-link" href="constitution-dun-patrimoine-artistique">recherche et constitution <br>d'un patrimoine artistique</a></li>
						          </ul>
						        </li>
						        <li class="dropdown">
						          <a class="dropdown-toggle dropdown-entreprise">Entreprises<span class="caret"></span></a>
						          <ul class="dropdown-menu">
						          	<li class="drop-item"><a class="drop-link visible-xs" href="entreprises">Entreprises</a></li>
						            <li class="drop-item"><a class="drop-link" href="financement-complexe">Recherche <br>de Financement complexe</a></li>
						            <li class="drop-item"><a class="drop-link" href="gestion-actifs">gestion d'actifs</a></li>
						            <li class="drop-item"><a class="drop-link" href="banques-et-institutions-financieres">banques et institutions<br> financières</a></li>
						          </ul>
						        </li>
						        <li class="nav-item"><a href="clients-et-partenaires" title="Nos références">clients & partenaires</a></li>
						        <li class="nav-item"><a href="contact" title="Prendre contact avec le Cabinet">contact</a></li>
						      </ul>
						       <?php elseif( urlMultilang() == 'en/') : ?>
						       <ul class="nav navbar-nav">
						        <li class="nav-item"><a href="homepage">Homepage<span class="sr-only">(current)</span></a></li>
						        <li class="nav-item"><a href="discover-cws">Discover CWS</a></li>
						        <li class="dropdown">
						          <a class="dropdown-toggle dropdown-wealth">Wealth Section<span class="caret"></span></a>
						          <ul class="dropdown-menu">
						          	<li class="drop-item"><a class="drop-link visible-xs" href="wealth-section">Wealth Section</a></li>
						            <li class="drop-item"><a class="drop-link" href="estate-funding">Search for real estate funding</a></li>
						            <li class="drop-item"><a class="drop-link" href="wealth-asset-management">Consulting for asset management</a></li>
						            <li class="drop-item"><a class="drop-link" href="investing-in-art">Investing in Art</a></li>
						          </ul>
						        </li>
						        <li class="dropdown">
						          <a class="dropdown-toggle dropdown-corporate">Corporate Section<span class="caret"></span></a>
						          <ul class="dropdown-menu">
						          	<li class="drop-item"><a class="drop-link visible-xs" href="corporate-section">Corporate section</a></li>
						            <li class="drop-item"><a class="drop-link" href="complex-financing">Search for complex financing</a></li>
						            <li class="drop-item"><a class="drop-link" href="asset-management">Consulting for asset management</a></li>
						            <li class="drop-item"><a class="drop-link" href="banks-and-financial-institutions">Banks and financial institutions</a></li>
						          </ul>
						        </li>
						        <li class="nav-item"><a href="clients-and-partners">clients & partners</a></li>
						        <li class="nav-item"><a href="contact-en">contact</a></li>
						      </ul>
			 					<?php endif; ?>
						    </div>
						</nav>
			 		</div>
			 	</div>
			 </header>
			 	