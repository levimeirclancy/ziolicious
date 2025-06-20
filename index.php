<?

$index_temp = "valid";

// if !($_SESSION['csv_contents'])):
//	$csv_contents = file_get_contents('https://docs.google.com/spreadsheets/d/e/2PACX-1vT2qh0dMlZ6gI8aEqqMjQt6ZS6U-sYOX3AKOHz1ajVgiJ0PfiNAQpp5B1-a8yAZ-e81DPMCs-b-aS8H/pub?output=csv');
//	$_SESSION['csv_contents'] = $csv_contents;
//	endif;

// print_r($csv_contents);

if (empty($url_chooser)):
	include_once('index-home.php');
if (in_array($url_chooser, ["style-global.css", "style-hashtags.css", "style-photo.css", "style-transitions.css"])):
	include_once(str_replace(".css", ".php", $url_chooser));
	echo css_process($css_array);
	exit;
elseif (in_array($url_chooser, $post_id_array)):
	include_once('index-entry.php');
elseif ($url_chooser == "about"):
	include_once('index-about.php');
elseif ($url_choose == "shop"):
	include_once('index-shop.php');
else:
	include_once('index-404.php');
	endif;

?>
