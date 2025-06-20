<?

if ($index_temp !== "valid"): exit; endif;

$html_temp = null;

	// 404 design

$img_url = 'https://images.unsplash.com/photo-1621874098652-168c080d322f?q=80&w=1287&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D';

$html_temp .= html_begin("Ziolicious", [ 'style_hashtags', 'style_global', 'style_transitions', 'style_photo' ]);

$html_temp .= '<main>';

$html_temp .= '<div class="photo-splash-img-background" style="background-image: url(\''.$img_url.'\');">';
$html_temp .= '<div class="photo-splash-img-overlay" style="background:conic-gradient(0,rgba(7,28,76,0.4) 20%,rgba(37,88,147,0.1) 50%, rgba(37,88,147,0.4) 100%);">';
$html_temp .= '<img class="photo-splash-img" src="'.$img_url.'" alt="">';
$html_temp .= '</div>';
$html_temp .= '</div>';

$html_temp .= '<div class="photo-splash-button-container">';
$html_temp .= '<div class="photo-splash-button"><span class="material-symbols-outlined">download</span><span>High res</span></div>';
$html_temp .= '<div class="photo-splash-button"><span class="material-symbols-outlined">download</span><span>Compressed</span></div>';
$html_temp .= '<div class="photo-splash-button"><span class="material-symbols-outlined">download</span><span>Raw</span></div>';
$html_temp .= '</div>';

$html_temp .= '<div class="photo-splash-story">';

$html_temp .= '<div class="photo-splash-story-caption" style="background:linear-gradient(135deg, rgba(7,28,76,1), rgba(37,88,147,1)); -webkit-background-clip:text;color:transparent;">';
  $html_temp .= 'I was walking along the coast of Tel Aviv. And when I looked up, I saw this beautiful flag. The land, the flag, the identity, all felt whole. This has been one of my more successful photos on Unsplash, used by a wide range of people.';
  $html_temp .= '</div>';

$html_temp .= '</div>';

$html_temp .= '</main>';

$html_temp .= html_end();

echo $html_temp;

?>
