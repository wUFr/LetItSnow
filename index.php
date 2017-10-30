<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8" />

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
	<div class="snow_wrapper">
		<div class="snow_front"></div>
		<div class="snow_front second"></div>

		<div class="snow_mid"></div>
		<div class="snow_mid second"></div>

		<div class="snow_back"></div>
		<div class="snow_back second"></div>
	</div>
</body>
</html>