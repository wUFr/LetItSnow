<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8" />


	<!-- USE FOR DEBUGING
	<link rel="stylesheet/less" href="/less/router.less" />
	<script>
		less = {
			env: "development",
			async: true,
			fileAsync: false,
			poll: 1000,
			functions: {},
			dumpLineNumbers: "comments",
			relativeUrls: false
		};
	</script>
	<script src="/js/less.min.js" type="text/javascript"></script>
	 -->
	
	<?php

	error_reporting(E_ALL);
	ini_set('display_errors', 'On');

	$dir = $_SERVER["DOCUMENT_ROOT"];
	$less_files = "/less/router.less";

	$config = array(
		"cache_dir"		=>	$dir . "/css",
		"compress"		=>	true,
		"source_map"	=>	true,
	);

	include_once($dir . "/lessphp/Autoloader.php");
	Less_Autoloader::register();
	$less = new Less_Parser($config);

	$less_files = $dir . $less_files;
	$less_files = array($less_files => "/");
	$css_file_name = Less_Cache::Get($less_files, $config);

	?>

	<link rel="stylesheet" href="/css/<?php echo $css_file_name; ?>" />

	<title>Let It Snow!</title>
</head>

<body>
	<!-- COPY THIS TO YOUR WEBSITE -->
	<div class="snow_wrapper">
		<div class="snow_front"></div>
		<div class="snow_front second"></div>

		<div class="snow_mid"></div>
		<div class="snow_mid second"></div>

		<div class="snow_back"></div>
		<div class="snow_back second"></div>
	</div>
	<!-- DO NOT COPY STUFF AFTER THIS TO YOUT SITE, UNLESS YOU LIKE COMIC SANS -->
	<div>
		<h1>
			LET IT SNOOOOW
		</h1>
		<div>
			<a href="//github.com/wUFr/LetItSnow" class="github">Source code on Github</a>
		</div>
	</div>
	
</body>
</html>
<!-- THIS IS ACTUALLY END OF HTML CODE, WHAT ARE YOU LOOKING AT?! -->