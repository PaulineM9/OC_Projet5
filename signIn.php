<!-- <-PROJET 5 OC: PORTFOLIO ET BLOG SUPER!-> -->
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="public/backstylesheet.css" />
	<!-- <link rel="icon" type="image/png" href=""/> -->
	<title>SUPER! Création de sites web et blog</title>
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
			color: #f5dada;
		}
	</style>
</head>

<body>
    <header class="signin_header">
        <a href="index.php?action=home"><img alt="logo-super" src="public/images/logo_super!.jpg"></a>
    </header>

    <section class="signin_form">
		<form class="signin" action="index.php?action=sign_in" method="post">
            <input class="identifiant" type="text" name="identifiant" size=60 placeholder="Identifiant" id="identifiant" required><br />
            <input class="email" type="email" name="email" placeholder="Votre email" id="email" required><br />
            <input class="password" type="password" name="password" placeholder="Mot de passe" id="password" required><br />
            <input class="check" type="password" name="check_password" placeholder="Confirmation du mot de passe" id="check_password" required><br />
            <input class="submit" type="submit" name="submit" value="Inscription" id="submit"><br />
        </form>
        <p>Le mot de passe doit contenir plus de 6 caractères <br /> dont au moins une majuscule et un caractère spécial.</p>
        <?php if(isset($_SESSION)): 
            include('views/flashMessages.php');
		endif; ?>
    </section>
</body>