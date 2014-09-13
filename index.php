<?php
	// Page requested
	$thisPage = $_REQUEST['page'];

	if ($thisPage == NULL)
		$thisPage = "/pages/home.php";
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
	<link rel="stylesheet" href="css/app.css" />
	<script src="bower_components/modernizr/modernizr.js"></script>
</head>
<body>
	<!--[if lt IE 7]>
	<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->

	<!-- HEADER -->
	<header>
		<div class="logos">
			<img id="nibble-logo" src="img/halfnibble-web-logo.png" alt="halfnibble">
			<br>
			<span class="hand">&nbsp;My two bits on coding</span>
		</div>
		<div class="description">
			<img class="th radius left" src="http://www.gravatar.com/avatar/7504fae09ab00aac17a6fbcb02d199d2.png">
			
			<h4 class="title"><span class="nobreak">Josh Wedekind</span></h4>
			
			<a href="#" class="round-icon"><i class="fa fa-twitter"></i></a> &nbsp;
			<a href="#" class="round-icon"><i class="fa fa-git"></i></a> &nbsp;
			<a href="3" class="round-icon"><i class="fa fa-linkedin"></i></a>
			<br style="clear: both">
			<span class="nobreak">Phone: <a href="#">+1 (206) 930-2645</a></span>&nbsp;
			<span class="nobreak">Email: <a href="mailto:josh@halfnibble.com">josh@halfnibble.com</a></span>			
		</div>
	</header>

	<!-- NAVIGATION -->
	<div class="contain-to-grid sticky">
		<nav class="top-bar" data-topbar data-options="sticky_on: large">
			<section class="top-bar-section">
				<ul class="left">
					<li class="active">
						<a href="#">Home</a>
					</li>
					<li class="">
						<a href="#">Articles</a>
					</li>
					<li class="">
						<a href="#">Portfolio</a>
					</li>
				</ul>
			</section>
		</nav>
	</div>

	<!-- PAGE CONTENT -->
	<?php
		try {
			if (file_exists($_SERVER["DOCUMENT_ROOT"].$thisPage))
				require $_SERVER["DOCUMENT_ROOT"].$thisPage;
			else
				throw new Exception("The webpage ($thisPage) does not exist!", 1);
		} catch (Exception $e) {
			echo "<section><div class=\"large-12 columns\">";
			echo "	<p>We were unable to access your page. Sorry.</p>";
			echo "	<p>Error message generated: ".$e->getMessage()."</p>";
			echo "</section></div>";
		}
	?>

	<!-- FOOTER -->
	<footer>
		<p>page footer</p>
	</footer>


	<!-- Application JavaScript -->
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script type="text/javascript">window.jQuery || document.write('<script src="bower_components/foundation/js/vendor/jquery.min.js"><\/script>')</script>
	<script type="text/javascript" src="bower_components/foundation/js/foundation.min.js"></script>
	<script type="text/javascript" src="/js/app.js"></script>
	<script type="text/javascript" src="/js/nibble.js"></script>
</body>
</html>
