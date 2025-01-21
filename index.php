<?

if !($_SESSION['csv_contents'])):
 $csv_contents = file_get_contents('https://docs.google.com/spreadsheets/d/e/2PACX-1vT2qh0dMlZ6gI8aEqqMjQt6ZS6U-sYOX3AKOHz1ajVgiJ0PfiNAQpp5B1-a8yAZ-e81DPMCs-b-aS8H/pub?output=csv');
 $_SESSION['csv_contents'] = $csv_contents;
endif;

print_r($csv_contents);

?>
