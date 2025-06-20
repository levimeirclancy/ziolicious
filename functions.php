<?

function html_begin ($title="Ziolicious", $style_array = []) {

	$html_temp = null;
	
	$html_temp .= '<!DOCTYPE html>';
	$html_temp .= '<html lang="en">';
	$html_temp .= '<head>';
	$html_temp .= '<meta charset="UTF-8" />';
	$html_temp .= '<meta name="viewport" content="width=device-width, initial-scale=1.0" />';
	$html_temp .= '<title>Ziolicious</title>';
	
	// FONTS
	$html_temp .= '<link rel="preconnect" href="https://fonts.googleapis.com">';
	$html_temp .= '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>';
	$html_temp .= '<link href="https://fonts.googleapis.com/css2?family=Monoton&family=Tilt+Warp&family=Righteous&family=Noto+Sans+Mono:wght@100..900&family=Playpen+Sans+Hebrew:wght@100..800&family=Mrs+Sheppards&family=Rubik+Maps&family=Rubik+Puddles&family=Secular+One&family=Solitreo&display=swap" rel="stylesheet">';
	
	$html_temp .= '<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=download" />';
	
	foreach ($style_array as $style_include):
		$html_temp .= '<link rel="stylesheet" type="text/css" href="'.$style_include.'.css">';
		endforeach;
		
	$html_temp .= '</head>';
	
	$html_temp .= '<body>';
	
	$html_temp .= '<header>';
	$html_temp .= '<span class="header-logo"><a href="/">Ziolicious</a></span>';
	$html_temp .= '<input class="search-box" type="text" placeholder="&#x1F50D;  Search">';
	$html_temp .= '</header>';

return $html_temp; }

?>
