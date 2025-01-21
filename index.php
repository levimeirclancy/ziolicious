<?

$index_temp = "valid";

if !($_SESSION['csv_contents'])):
	$csv_contents = file_get_contents('https://docs.google.com/spreadsheets/d/e/2PACX-1vT2qh0dMlZ6gI8aEqqMjQt6ZS6U-sYOX3AKOHz1ajVgiJ0PfiNAQpp5B1-a8yAZ-e81DPMCs-b-aS8H/pub?output=csv');
	$_SESSION['csv_contents'] = $csv_contents;
	endif;

print_r($csv_contents);

// Home
// About
// Shop

// Telegram channel
// WhatsApp channel
// Subreddit
// Bluesky

if (empty($url_chooser)):
	include_once('index-home.php');
elseif (in_array($url_chooser, $post_id_array)):
	include_once('index-entry.php');
elseif ($url_chooser == "about"):
	include_once('index-about.php');
elseif ($url_choose == "shop"):
	include_once('index-about.php');
else:
	include_once('index-404.php');
	endif;

?>
