<?

$index_temp = "valid";

// if !($_SESSION['csv_contents'])):
//	$csv_contents = file_get_contents('https://docs.google.com/spreadsheets/d/e/2PACX-1vT2qh0dMlZ6gI8aEqqMjQt6ZS6U-sYOX3AKOHz1ajVgiJ0PfiNAQpp5B1-a8yAZ-e81DPMCs-b-aS8H/pub?output=csv');
//	$_SESSION['csv_contents'] = $csv_contents;
//	endif;

// print_r($csv_contents);

$url_array = [];
$url_array_raw = explode("/",$_SERVER['REQUEST_URI']);
foreach ($url_array_raw as $key_temp => $url_temp):
	if ($key_temp == 0): continue; endif;
	if ($key_temp > 4): break; endif;
	if (empty($url_temp)): continue; endif;
	$url_array[] = $url_temp;
	endforeach;

include_once('functions.php');

// if (empty($url_array[0])):
if ($url_array[0] == "testing"):
	include_once('index_home.php');
	exit;
elseif (in_array($url_array[0], ['style_global.css', 'style_hashtags.css', 'style_photo.css', 'style_transitions.css'])):
	include_once(str_replace('.css', '.php', $url_array[0]));
	header('Content-type: text/css');
	echo css_process($css_array);
	exit;
elseif ($url_array[0] == "about"):
	include_once('index_about.php');
	exit;
elseif ($url_array[0] == "shop"):
	include_once('index_shop.php');
	exit;
	endif;

include_once('index_404.php');
exit;

?>
