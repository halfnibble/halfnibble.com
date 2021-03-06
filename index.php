<?php
	// Page requested
	$page = $_REQUEST['page'];

	if (empty($page))
		$page = "home.php";

	$links = array(
		"home.php" => "",
		"articles.php" => "",
		"portfolio.php" => "",
		"projects.php" => "",
		"services.php" => "");

	$links[$page] = "active";
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>halfnibble - Expect the Awesome!</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

	<!-- Required CSS & JavaScript -->
	<link href='http://fonts.googleapis.com/css?family=Cabin:400,700|Homemade+Apple|Electrolize' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="/css/app.css" />
	<script src="/bower_components/modernizr/modernizr.js"></script>
</head>
<body>
	<!--[if lt IE 7]>
	<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->

	<!-- NAVIGATION -->
	<div id="nav-container" class="fixed contain-to-grid">
		<nav class="top-bar" data-topbar role="navigation" data-options="sticky_on: large">
			<ul class="title-area">
			    <li class="name">
			    	<h1><a href="#">@menu</a></h1>
			    </li>
    			<li class="toggle-topbar"><a href="#"><span><i class="fa fa-navicon round-icon"></i></span></a></li>
  			</ul>

			<section class="top-bar-section">	
				<ul class="left">
					<li class="<?php echo $links["home.php"]; ?>">
						<a href="/page/home">
							<i class="fa fa-home round-icon"></i>
							Home
						</a>
					</li>
					<li class="<?php echo $links["articles.php"]; ?>">
						<a href="/page/articles">
							<i class="fa fa-file-text round-icon"></i>
							Articles
						</a>
					</li>
					<li class="<?php echo $links["portfolio.php"]; ?>">
						<a href="/page/portfolio">
							<i class="fa fa-folder round-icon"></i>
							Portfolio
						</a>
					</li>
					<li class="<?php echo $links["projects.php"]; ?>">
						<a href="/page/projects">
							<i class="fa fa-terminal round-icon"></i>
							Projects
						</a>
					</li>
					<li class="<?php echo $links["services.php"]; ?>">
						<a href="/page/services">
							<i class="fa fa-suitcase round-icon"></i>
							Services
						</a>
					</li>
				</ul>
			</section>
		</nav>
	</div>

	<!-- HEADER -->
	<header>
		<div class="logos">
			<img id="nibble-logo" src="/img/halfnibble-web-logo.png" alt="halfnibble">
			<br>
			<span class="hand">&nbsp;My two bits on coding</span>
		</div>
		<div class="description">
				
			<div id="description-center">
				<div class="right">
					<h4 class="title"><span class="nobreak">Josh Wedekind</span></h4>
					<h6>Full stack web developer</h6>
					<a href="https://www.linkedin.com/pub/joshua-wedekind/15/8a1/27" target="_blank" class="round-icon"><i class="fa fa-linkedin"></i></a>
					<a href="https://github.com/halfnibble/" target="_blank" class="round-icon"><i class="fa fa-git"></i></a>
					<a href="https://twitter.com/halfnibble" target="_blank" class="round-icon"><i class="fa fa-twitter"></i></a>
				</div>

				<img class="th radius" src="http://www.gravatar.com/avatar/7504fae09ab00aac17a6fbcb02d199d2.png">

				<br style="clear: both">
			</div>
			

			<span class="">
				<i class="fa fa-phone round-icon contact-me"></i>
				<a href="tel:2069302645">+1 (206) 930-2645</a>
			</span>&nbsp;
			<span class="nobreak">
				<i class="fa fa-envelope round-icon contact-me"></i>
				<a href="mailto:josh@halfnibble.com?subject=Web Development">josh@halfnibble.com</a>
			</span>			
		</div>
	</header>

	
	<!-- PAGE CONTENT -->
	<div id="page-content">
	<?php
		try {
			if (file_exists($_SERVER["DOCUMENT_ROOT"]."/pages/".$page))
				require $_SERVER["DOCUMENT_ROOT"]."/pages/".$page;
			else
				throw new Exception("The webpage ($page) does not exist!", 1);
		} catch (Exception $e) {
			echo "<section><div class=\"large-12 columns\">";
			echo "	<p>We were unable to access your page. Sorry.</p>";
			echo "	<p>Error message generated: ".$e->getMessage()."</p>";
			echo "</section></div>";
		}
	?>
	</div>

	<!-- FOOTER -->
	<footer>
		<p>&copy; Josh Wedekind 2014 &middot; halfnibble.com &middot; Made in the USA</p>
	</footer>


	<!-- Application JavaScript -->
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script type="text/javascript">window.jQuery || document.write('<script src="/bower_components/foundation/js/vendor/jquery.min.js"><\/script>')</script>
	<script type="text/javascript" src="/bower_components/foundation/js/foundation.min.js"></script>
	<script type="text/javascript" src="/js/app.js"></script>
	<script type="text/javascript" src="/js/nibble.js"></script>
</body>
</html>
