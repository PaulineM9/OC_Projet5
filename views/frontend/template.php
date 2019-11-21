<!-- <-PROJET 5 OC: PORTFOLIO ET BLOG SUPER!-> -->
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="public/frontstylesheet.css" />
	<!-- <link rel="icon" type="image/png" href=""/> -->
	<title><?= $title ?></title>
	<meta name="viewport" content="width=device-width,initial-scale=1" />
	<link rel="icon" type="image/jpg" href="public/images/favicon_super!.jpg" /><!-- favicon -->

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Lato|Major+Mono+Display|Pacifico|Tajawal&display=swap" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Poiret+One&display=swap" rel="stylesheet">  

	<!-- Fontawesome Icones -->
	<script src="https://kit.fontawesome.com/504cd5157f.js"></script>

	<!-- TinyMCE -->
	<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
	<script>
		tinymce.init({
			selector: "#mytextarea",
			language_url: "./public/langs/fr_FR.js",
			language: "fr_FR",
		});
	</script>

	<!-- Twitter Card data -->
	<meta name="twitter:card" content="summary_large_image" />
	<meta name="twitter:creator" content="@SUPER!">

	<!-- FB Open Graph data -->
	<meta property="og:title" content="SUPER! Création de sites web et blog" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="www.pauline-superweb.com" />
	<meta property="og:image" content="../public/favicon_super!.jpeg" />
	<meta property="og:description" content="SUPER! Création de sites web" />

	<meta name="description" content="SUPER! Création de sites web et blog" />
	<meta name="keywords" content="SUPER! Création de sites web, portfolio, blog" />
	<meta name="author" content="SUPER!" />
	<style>
		a {
			text-decoration: none;
			color: #000000;
		}
		a:hover {

			text-decoration: none;
			color: #128f8c;
		}
	</style>
</head>

<body>
    <header class="front_template_header">
		<div class="logo">
			<a class="logo-super" href="index.php?action=home"><img alt="super-logo" src="public/images/logo_super!.jpg"></a>
		</div>
		<div class="navigation_menu_principal">
			<a href="index.php?action=home"><h2>Accueil</h2></a>
			<a href="index.php?action=services"><h2>Services</h2></a>
			<a href="index.php?action=about"><h2>A Propos</h2></a>
			<a href="index.php?action=portfolio"><h2>Portfolio</h2></a>
			<a href="index.php?action=blog" target="new"><h2>Blog</h2></a>
			<a href="index.php?action=contact"><h2>Contact</h2></a>
		</div>
    </header>

	<?= $content ?>

	<footer>
		<div class="infos_container">
			<div class="footer_logo">
				<a class="footer_logo_super " href="index.php?action=home"><img alt="super-logo" src="public/images/logo_super!.jpg"></a>
			</div>
			<div class="contact_infos">
				<h4>CONTACT</h4>
				<p><a href="mailto:contact.super.web@gmail.com">contact.super.web@gmail.com</a></p>
				<p>+33 6 18 06 19 26</p>
				<p><a href="">Formulaire de contact</a></p>
			</div>
			<div class="ei_infos">
				<h4>INFOS</h4>
				<p>Entreprise Individuelle Pauline MARTIN</p>
				<p>RCS 752 722 744 000 22</p>
			</div>
			<div class="suivez-moi">
				<h4>SUIVEZ-MOI</h4>
				<a target="new" href=""><img class="facebook_icon" alt="icone-facebook" src="public/images/fb_bk.png" width="30px"></a>
				<a target="new" href=""><img class="instagram_icon" alt="icone-instagram" src="public/images/insta_bk.png" width="30px"></a>
				<a target="new" href=""><img class="linkedin_icon" alt="icone-linkedin" src="public/images/linkedin_bk.png" width="30px"></a>
				<a target="new" href=""><img class="github_icon" alt="icone-github" src="public/images/github_bk.png" width="30px"></a>
			</div>
		</div>
		<div class="copyright_container">
			<p class="copyright">Tous droits réservés SUPER! 2019 / réalisé par SUPER! / <a target="new" href="index.php?action=mentions_legales">Mentions Légales</a> / <a target="new" href="index.php?action=login">Connexion</a></p>
		</div>
	</footer> 

	<script type="text/javascript" src="./public/js/functionAddEvent.js"></script>
	<script type="text/javascript" src="./public/js/contact.js"></script>
	<script type="text/javascript" src="./public/js/xmlHttp.js"></script>
</body>


