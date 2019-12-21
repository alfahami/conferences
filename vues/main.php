<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />

		<title>Accueil</title>

		<!-- CSS Styles -->

		<link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/css/reset.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/css/styles.css" type="text/css" />
		<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
		<link rel="icon" type="image/jpg" href="<?php echo ROOT_PATH; ?>assets/images/lastOne.jpg" />


		<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->


	<?php if($vue == '/admins/connexion.php') {  ?>

			<body  style="background: #8CB2CA;">

				<div style="margin-top: 50px; margin-bottom: 0;"><?php Messages::display(); ?></div>
				<?php require(dirname(__FILE__) . $vue);?>

			</body>

	<?php } else { ?>
	</head>

	<body>
		<div id="container">

			<header>
				<div class="width">
					<h1><a href="<?php echo ROOT_PATH; ?>"><img id="imgLogo" src="<?php echo ROOT_PATH; ?>assets/images/3c.jpg"></a></h1>

					<nav>
						<ul class="sf-menu dropdown">
							<?php if(isset($_SESSION['user_data']['nom_utilisateur'])) { ?>
							<li class="selected"><a href="<?php echo ROOT_PATH; ?>utilisateurs/conferences">Accueil</a></li>
							<?php } else { ?>
							<li class="selected"><a href="<?php echo ROOT_PATH; ?>">Accueil</a></li>
							<?php } ?>
							<!-- Dropdown-->
							<li>
								<a href="#">Papiers</a>
								<ul>
									<li><a href="<?php echo ROOT_PATH; ?>accueil/appelspapiers">Appels</a></li>
									<li><a href="<?php echo ROOT_PATH; ?>accueil/soumissionpapiers">Soumission</a></li>
									<li><a href="<?php echo ROOT_PATH; ?>accueil/papiersacceptes">Papiers acceptés</a></li>
								</ul>
							</li>
							<li>
								<a href="">Conférence</a>
								<ul>
									<li><a href="<?php echo ROOT_PATH; ?>accueil/sujets">Sujets présentés</a></li>
									<li><a href="<?php echo ROOT_PATH; ?>accueil/organisateursConfs">Organisateurs</a></li>
									<li><a href="<?php echo ROOT_PATH; ?>accueil/comite">Comités</a></li>
									<!-- <li><a href="organisateurs_conf.html">Programme de comité</a></li> -->
								</ul>

							</li>

							<li><a href="<?php echo ROOT_PATH;?>accueil/dates">Dates importantes</a></li>
							<?php if(isset($_SESSION['user_data']['admin_name']) || isset($_SESSION['user_data']['nom_utilisateur']))   : ?>
								<li><a href="<?php echo ROOT_PATH; ?>admins/deconnexion" style="color:red;">Déconnexion</a></li>
							<?php else : ?>
							<li><a href="<?php echo ROOT_PATH; ?>accueil/inscription">Inscription</a></li>
							<li><a href="<?php echo ROOT_PATH; ?>utilisateurs/connexion">Connexion</a></li>
						<?php endif; ?>
						</ul>

						<div class="clear"></div>

					</nav>
				</div>

				<div class="clear"></div>

			</header>


			<div id="intro" style="background-image: url('<?php echo ROOT_PATH; ?>assets/images/header_test.jpg'); height: 250px;">

				<div class="width">

					<div class="intro-content">



					</div>

				</div>


			</div>

			<div id="body">

				<div class="width">

					<aside class="sidebar small-sidebar left-sidebar">

						<ul>
							<li class="color-bg">

								<ul class="blocklist">
									<!-- Menu de l'administrateur -->
									<?php if(isset($_SESSION['user_data']['admin_name'])) { ?>
										<li><a class="" href="<?php echo ROOT_PATH; ?>admins/creerConference">Crée une conférence</a></li>
										<li><a href="<?php echo ROOT_PATH; ?>admins/construireComite">Construire liste de comité</a></li>
										<li><a href="<?php echo ROOT_PATH; ?>admins/listeComite">Liste de comités</a></li>
										<li><a href="<?php echo ROOT_PATH; ?>admins/etablirTutoriel">Etablir tutoriel</a></li>
										<li><a href="<?php echo ROOT_PATH; ?>admins/determinerSession">Determiner session</a></li>
										<li><a href="<?php echo ROOT_PATH; ?>admins/affecterPapier">Affecter papier aux comités</a></li>
										<li><a href="<?php echo ROOT_PATH; ?>admins/etatPapiers">Decider etat papier</a></li>
										<li><a href="<?php echo ROOT_PATH; ?>admins/papiersEvaulues">Papiers evalués</a></li>
										<li><a href="<?php echo ROOT_PATH; ?>admins/changerSessionPapier">Changer session papier</a></li>
										<li><a href="<?php echo ROOT_PATH; ?>admins/statistiqueConference">statistique de la conférence</a></li>

									<?php } else if($_SESSION['user_data']['statut_utilisateur'] == 'Auteur') { ?>
										<li><a class="" href="<?php echo ROOT_PATH; ?>utilisateurs/soumettrePapier">Soumettre papier</a></li>
										<li><a href="<?php echo ROOT_PATH;?>utilisateurs/supprimerPapiers">Supprimer papier</a></li>
										<li><a href="<?php echo ROOT_PATH; ?>utilisateurs/changerProfil">Changer profil</a></li>
										<li><a href="<?php echo ROOT_PATH; ?>utilisateurs/changerSession">Changer session</a></li>

										<!-- Menu de l'utilisateur inscrit -->
								<?php } else if(isset($_SESSION['user_data']['nom_utilisateur'])) { ?>
									<li><a class="" href="<?php echo ROOT_PATH; ?>utilisateurs/soumettrePapier">Soumettre papier</a></li>
									<li><a href="<?php echo ROOT_PATH;?>utilisateurs/appelContribution">appel contribution</a></li>

									<!-- Menu de l'auteur-->


									<!--Utilisateur standard -->
								<?php } else { ?>
										<li><a class="<?php ?> <?php ?>" href="<?php echo ROOT_PATH; ?>">Page d'accueil</a></li>
										<li><a href="<?php echo ROOT_PATH;?>accueil/dates">Dates importantes</a></li>
										<li><a href="<?php echo ROOT_PATH; ?>accueil/organisateursConfs">Organisateur de conférence</a></li>
										<li><a href="<?php echo ROOT_PATH; ?>accueil/appelsPapiers">Appels de papiers</a></li>
										<li><a href="<?php echo ROOT_PATH; ?>accueil/soumissionPapiers">Soumission de papiers</a></li>
										<li><a href="<?php echo ROOT_PATH; ?>accueil/papiersAcceptes">Liste de papier acceptés</a></li>
										<li><a href="<?php echo ROOT_PATH; ?>accueil/comite">Comité</a></li>
										<li><a href="<?php echo ROOT_PATH; ?>accueil/sujets">Sujets de conférences</a></li>
										<li><a href="<?php echo ROOT_PATH; ?>accueil/conferenciers">Conférenciers</a></li>
										<li><a href="<?php echo ROOT_PATH; ?>accueil/nousContacter">Nous contacter</a></li>
									<?php } ?>

								</ul>
							</li>

						</ul>

					</aside>

					<section id="content" class="two-column with-right-sidebar">

							<div style="margin-top: 50px; margin-bottom: 0;"><?php Messages::display(); ?></div>
            	
				<?php require(dirname(__FILE__) . $vue);?>

					</section>

					<div class="clear"></div>

				</div> <!-- #width -->
			</div> <!-- #body -->

		</div> <!-- #container -->

		<footer>
			<div class="footer-bottom">
				<p>&copy; 3C - 2018 <a href="<?php echo ROOT_PATH; ?>">Cloud Computing Conferences</a> by nC & BHMS</p>
			</div>
		</footer>

		<?php } ?>
		<!-- Javascript -->

		<script type="text/javascript" src="<?php echo ROOT_PATH; ?>assets/js/jquery.js"></script>
		<script type="text/javascript" src="<?php echo ROOT_PATH; ?>assets/js/slider.js"></script>
		<script type="text/javascript" src="<?php echo ROOT_PATH; ?>assets/js/superfish.js"></script>
		<script type="text/javascript" src="<?php echo ROOT_PATH; ?>assets/js/custom.js"></script>

		<!-- Login -->
		<!-- login -->
		<script type="text/javascript" src="<?php echo ROOT_PATH; ?>assets/js/login.js"></script>


	</body>
</html>
