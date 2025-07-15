<?

function html_begin ($title="Ziolicious", $style_array = []) {

	$html_temp = null;
	
	$html_temp .= '<!DOCTYPE html>';
	$html_temp .= '<html lang="en">';
	$html_temp .= '<head>';
	$html_temp .= '<meta charset="UTF-8">';
	$html_temp .= '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
	$html_temp .= '<title>Ziolicious</title>';
	
	// FONTS
	$html_temp .= '<link rel="preconnect" href="https://fonts.googleapis.com">';
	$html_temp .= '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>';
	$html_temp .= '<link href="https://fonts.googleapis.com/css2';
	$html_temp .= '?family=Monoton';
	$html_temp .= '&family=Tilt+Warp';
	$html_temp .= '&family=Rubik+Mono+One';
//	$html_temp .= '&family=Secular+One';
//	$html_temp .= '&family=Solitreo';
	$html_temp .= '&display=swap" rel="stylesheet">';
	
	$html_temp .= '<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=download">';
	
	foreach ($style_array as $style_include):
		$html_temp .= '<link rel="stylesheet" type="text/css" href="https://ziolicious.com/'.$style_include.'.css">';
		endforeach;
		
	$html_temp .= '</head>';
	
	$html_temp .= '<body>';
	
	$html_temp .= '<header>';
	$html_temp .= '<span class="header-logo"><a href="/testing/">Ziolicious</a></span>';
	$html_temp .= '</header>';

	$html_temp .= '<nav>';
	$html_temp .= '<div class="search-box-container">';
		$html_temp .= '<input class="search-box" type="text" placeholder="&#x1F50D;  Search">';
		$html_temp .= '</div>';
	$html_temp .= '</nav>';
	
	return $html_temp; }


function html_end() {
	$html_temp = null;
	$html_temp .= '<footer>';
		$html_temp .= '<a href="#">Instagram</a>';
		$html_temp .= '<a href="#">X (Twitter)</a>';
		$html_temp .= '<a href="#">Email</a>';
	 	$html_temp .= '<a href="#">Advertise</a>';
	 	$html_temp .= '<a href="#">hello@ziolicious.com</a>';
		$html_temp .= '</footer>';
	$html_temp .= '</body>';
	$html_temp .= '</html>';
	return $html_temp;
	}

function css_process ($css_array=[]) {
	$css_temp = null;
	foreach ($css_array as $selector_temp => $properties_array):
		$css_temp .= $selector_temp." {";
		foreach ($properties_array as $property_temp => $value_temp):
			$css_temp .= $property_temp.": ".$value_temp.";";
			endforeach;
		$css_temp .= "} ";
		endforeach;
	return $css_temp;
	}

?>
