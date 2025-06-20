<?

if ($index_temp !== "valid"): exit; endif;

$html_temp = null;

	// 404 design

$html_temp .= html_begin("Ziolicious", [ "style_hashtags", "style_global", "style_transitions" ]);

$html_temp .= '<div class="body-tagline">Stories in color. Stories in context.</div>';

$html_temp .= '<div class="body-tagline-description">Immersive micro-stories showing whole, unapologetic Jewish life. All content is free for editorial use by Zionist creators. Still confused? <a href="/about/"><span class="link-animation">Learn more</span></a></div>';

$html_temp .= '<main>';

$html_temp .= '<div class="body-sections">';

// Album
$img_array = [
	'https://images.unsplash.com/photo-1621874098652-168c080d322f?q=80&w=1287&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
	'https://cdn.myportfolio.com/edcae732-6d45-4207-bf20-5f1fad45d9f8/97074001-bd9d-46ea-ab00-d0fa3cff5d3d_rw_1200.jpg?h=e11f505c82d0f061611cb397b9ca090f',
	'https://cdn.myportfolio.com/edcae732-6d45-4207-bf20-5f1fad45d9f8/3078bc6c-104a-40ac-bfe9-3b3c2ae303a2_rw_1200.jpg?h=9a0e223fff3a1bb2034c5e52e6423d01',
	'https://cdn.myportfolio.com/edcae732-6d45-4207-bf20-5f1fad45d9f8/60fa597f-a39c-4e23-90a6-fb74a23c61c3_rw_1920.jpg?h=4bf60bd6049725359060e277127fc254',
	'https://plus.unsplash.com/premium_photo-1674933213970-e270ae5010e6?w=900&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTd8fHRlbCUyMGF2aXZ8ZW58MHx8MHx8fDA%3D',
	'https://images.unsplash.com/photo-1632700081118-023072acc02a?q=80&w=2340&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
	'https://images.unsplash.com/photo-1652550118215-16a41e067804?q=80&w=2670&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
	'https://images.unsplash.com/photo-1652906072015-1b45781732bf?q=80&w=2274&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
	];

// start the flex box

	//header
	$html_temp .= '<div class="album-flex-item section-header">';
	$html_temp .= '<a class="hashtag-link hashtag-link-transition-two hashtag-telaviv" href="#"><span class="hashtag-symbol">#</span><span class="hashtag-text">TelAviv</span></a>';
	$html_temp .= '</div>';


$html_temp .= '<div class="album-flex">';

	// description
	$html_temp .= '<div class="album-flex-item section-description">Color, energy, and calm at the Mediterranean’s edge.</div>';

	// images
	foreach ($img_array as $img_temp):
		$html_temp .= '<a href="/photo/"><img class="album-flex-item photo-row-img-transition-one" src="'.$img_temp.'"></a>';
		endforeach;

	// close the flex box
	$html_temp .= '</div>';

// Tag cloud
$html_temp .= '<div class="body-section-background hashtag-queeridentity">';
$html_temp .= '<div class="body-section">';
	$html_temp .= '<div class="section-header">';
		$html_temp .= '<a class="hashtag-link hashtag-link-transition-one hashtag-white" href="#"><span class="hashtag-symbol">#</span><span class="hashtag-text">QueerIdentity</span></a>';
		$html_temp .= '</div>';
	$html_temp .= '<div class="tag-cloud">';
		$html_temp .= '<a class="hashtag-link hashtag-link-transition-two hashtag-white" href="#"><span class="hashtag-symbol">#</span><span class="hashtag-text">NSFW</span></a>';
		$html_temp .= '<a class="hashtag-link hashtag-link-transition-two hashtag-white" href="#"><span class="hashtag-symbol">#</span><span class="hashtag-text">couples</span></a>';
		$html_temp .= '<a class="hashtag-link hashtag-link-transition-one hashtag-white" href="#"><span class="hashtag-symbol">#</span><span class="hashtag-text">families</span></a>';
		$html_temp .= '<a class="hashtag-link hashtag-link-transition-two hashtag-white" href="#"><span class="hashtag-symbol">#</span><span class="hashtag-text">trans</span></a>';
		$html_temp .= '<a class="hashtag-link hashtag-link-transition-one hashtag-white" href="#"><span class="hashtag-symbol">#</span><span class="hashtag-text">nonbinary</span></a>';
		$html_temp .= '<a class="hashtag-link hashtag-link-transition-three hashtag-white" href="#"><span class="hashtag-symbol">#</span><span class="hashtag-text">advocacy</span></a>';
		$html_temp .= '<a class="hashtag-link hashtag-link-transition-one hashtag-white" href="#"><span class="hashtag-symbol">#</span><span class="hashtag-text">lesbians</span></a>';
		$html_temp .= '</div>';
	$html_temp .= '</div>';
	$html_temp .= '</div>';

// Album
$img_array = [
	'https://cdn.myportfolio.com/edcae732-6d45-4207-bf20-5f1fad45d9f8/8c15e766-861d-4ffc-85ad-d841942e5a30_rw_1200.jpg?h=37e4c970d08a15ac361a149dc59f3466',
	'https://cdn.myportfolio.com/edcae732-6d45-4207-bf20-5f1fad45d9f8/9bbe2424-dbf5-4232-9aef-d0fa1030a54f_rw_600.jpg?h=f0881407ab26553b4913a01c179a75e3',
	'https://cdn.myportfolio.com/edcae732-6d45-4207-bf20-5f1fad45d9f8/88d49c26-0e18-4dde-a8d7-639f651f41e7_rw_1200.jpg?h=1fa631133d6f9c7cfbff286b9ade9a3c',
	'https://cdn.myportfolio.com/edcae732-6d45-4207-bf20-5f1fad45d9f8/8c15e766-861d-4ffc-85ad-d841942e5a30_rw_1200.jpg?h=37e4c970d08a15ac361a149dc59f3466',
	];
$html_temp .= '<div class="body-section-background" style="background-image: url(\''.$img_array[0].'\');">';
$html_temp .= '<div class="body-section body-section-overlay">';
	$html_temp .= '<div class="section-header">';
		$html_temp .= '<a class="hashtag-link hashtag-link-transition-three hashtag-blackjewish" href="#"><span class="hashtag-symbol">#</span><span class="hashtag-text">BlackJewish</span></a>';
		$html_temp .= '<a class="hashtag-link hashtag-link-transition-two hashtag-families" href="#"><span class="hashtag-symbol">#</span><span class="hashtag-text">families</span></a>';
		$html_temp .= '</div>';
	$html_temp .= '<p class="section-description">Color, energy, and calm at the Mediterranean’s edge.</p>';
	$html_temp .= '<div class="photo-row">';
		$html_temp .= '<a href="/photo/"><img class="photo-row-img photo-row-img-transition-one" src="'.$img_array[0].'"></a>';
		$html_temp .= '<a href="/photo/"><img class="photo-row-img photo-row-img-transition-two" src="'.$img_array[1].'"></a>';
		$html_temp .= '<a href="/photo/"><img class="photo-row-img photo-row-img-transition-three" src="'.$img_array[2].'"></a>';
		$html_temp .= '<a href="/photo/"><img class="photo-row-img photo-row-img-transition-one" src="'.$img_array[3].'"></a>';
		$html_temp .= '</div>';
	$html_temp .= '</div>';
	$html_temp .= '</div>';
  
// Tag cloud
$html_temp .= '<div class="body-section-background hashtag-landscapes">';
$html_temp .= '<div class="body-section">';
	$html_temp .= '<div class="section-header">';
		$html_temp .= '<a class="hashtag-link hashtag-link-transition-one hashtag-white" href="#"><span class="hashtag-symbol">#</span><span class="hashtag-text">landscapes</span></a>';
		$html_temp .= '</div>';
	$html_temp .= '<div class="tag-cloud">';
		$html_temp .= '<a class="hashtag-link hashtag-link-transition-two hashtag-white" href="#"><span class="hashtag-symbol">#</span><span class="hashtag-text">beach</span></a>';
		$html_temp .= '<a class="hashtag-link hashtag-link-transition-two hashtag-white" href="#"><span class="hashtag-symbol">#</span><span class="hashtag-text">sunset</span></a>';
		$html_temp .= '<a class="hashtag-link hashtag-link-transition-one hashtag-white" href="#"><span class="hashtag-symbol">#</span><span class="hashtag-text">desert</span></a>';
		$html_temp .= '<a class="hashtag-link hashtag-link-transition-two hashtag-white" href="#"><span class="hashtag-symbol">#</span><span class="hashtag-text">sky</span></a>';
		$html_temp .= '<a class="hashtag-link hashtag-link-transition-one hashtag-white" href="#"><span class="hashtag-symbol">#</span><span class="hashtag-text">pomegranate</span></a>';
		$html_temp .= '<a class="hashtag-link hashtag-link-transition-three hashtag-white" href="#"><span class="hashtag-symbol">#</span><span class="hashtag-text">forest</span></a>';
		$html_temp .= '<a class="hashtag-link hashtag-link-transition-one hashtag-white" href="#"><span class="hashtag-symbol">#</span><span class="hashtag-text">urban</span></a>';
		$html_temp .= '</div>';
	$html_temp .= '</div>';
	$html_temp .= '</div>';



// Album
$img_array = [
	'https://cdn.myportfolio.com/edcae732-6d45-4207-bf20-5f1fad45d9f8/a61ed5cd-0b24-45dd-82e9-a1341314b93b_rw_1920.jpg?h=f7e593cc8f314d4f629ff87b14be957f',
	'https://cdn.myportfolio.com/edcae732-6d45-4207-bf20-5f1fad45d9f8/9bbe2424-dbf5-4232-9aef-d0fa1030a54f_rw_600.jpg?h=f0881407ab26553b4913a01c179a75e3',
	'https://cdn.myportfolio.com/edcae732-6d45-4207-bf20-5f1fad45d9f8/88d49c26-0e18-4dde-a8d7-639f651f41e7_rw_1200.jpg?h=1fa631133d6f9c7cfbff286b9ade9a3c',
	'https://cdn.myportfolio.com/edcae732-6d45-4207-bf20-5f1fad45d9f8/8c15e766-861d-4ffc-85ad-d841942e5a30_rw_1200.jpg?h=37e4c970d08a15ac361a149dc59f3466',
	];
$html_temp .= '<div class="body-section-background" style="background-image: url(\''.$img_array[0].'\');">';
$html_temp .= '<div class="body-section body-section-overlay">';
	$html_temp .= '<div class="section-header">';
		$html_temp .= '<a class="hashtag-link hashtag-link-transition-one hashtag-jerusalem" href="#"><span class="hashtag-symbol">#</span><span class="hashtag-text">Jerusalem</span></a>';
		$html_temp .= '<a class="hashtag-link hashtag-link-transition-three hashtag-architecture" href="#"><span class="hashtag-symbol">#</span><span class="hashtag-text">architecture</span></a>';
		$html_temp .= '</div>';
	$html_temp .= '<p class="section-description">Color, energy, and calm at the Mediterranean’s edge.</p>';
	$html_temp .= '<div class="photo-row">';
		$html_temp .= '<a href="/photo/"><img class="photo-row-img photo-row-img-transition-one" src="'.$img_array[0].'"></a>';
		$html_temp .= '<a href="/photo/"><img class="photo-row-img photo-row-img-transition-two" src="'.$img_array[1].'"></a>';
		$html_temp .= '<a href="/photo/"><img class="photo-row-img photo-row-img-transition-three" src="'.$img_array[2].'"></a>';
		$html_temp .= '<a href="/photo/"><img class="photo-row-img photo-row-img-transition-one" src="'.$img_array[3].'"></a>';
		$html_temp .= '</div>';
	$html_temp .= '</div>';
	$html_temp .= '</div>';

$html_temp .= '</div>';

$html_temp .= '</main>';

$html_temp .= html_end();

echo $html_temp;

?>
