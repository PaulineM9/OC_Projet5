<!-- <-PROJET 5 OC: PORTFOLIO ET BLOG SUPER!-> -->
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="public/backstylesheet.css" />
	<!-- <link rel="icon" type="image/png" href=""/> -->
	<title><?= $title ?></title>
	<meta name="viewport" content="width=device-width,initial-scale=1" />
	<link rel="icon" type="image/jpg" href="public/images/favicon_super!.jpg" /><!-- favicon -->

	<!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato|Major+Mono+Display|Pacifico|Tajawal&display=swap" rel="stylesheet">  

	<!-- Fontawesome Icones -->
	<script src="https://kit.fontawesome.com/504cd5157f.js"></script>

	<!-- TinyMCE -->
	<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
	<script>
		tinymce.init({
			selector: "#mytextarea",
			language_url: "./public/langs/fr_FR.js",
			language: "fr_FR",
			toolbar: "image",
  			plugins: "image imagetools",
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
       <?= $content ?>
</body>