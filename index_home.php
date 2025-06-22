<?

if ($index_temp !== "valid"): exit; endif;

$html_temp = null;

	// 404 design

$html_temp .= html_begin("Ziolicious", [ "style_hashtags", "style_global", "style_transitions" ]);

$html_temp .= '<div class="body-tagline">Stories in color. Stories in context.</div>';

$html_temp .= '<div class="body-tagline-description">Immersive micro-stories showing whole, unapologetic Jewish life. All content is free for editorial use by Zionist creators. Still confused? <a href="/about/"><span class="link-animation">Learn more</span></a></div>';

$html_temp .= '<main>';

$html_temp .= '<div class="body-sections">';

function splash_album($hashtag_header, $hashtag_description, $img_array) {
	$html_temp = null;
	$html_temp .= '<div class="body-section-background" style="background-image: url(\''.$img_array[0].'\');">';
	$html_temp .= '<div class="body-section body-section-overlay">';
		$html_temp .= '<div class="section-header">';
		$html_temp .= '<a class="hashtag-link hashtag-link-transition-two hashtag-'.strtolower($hashtag_header).'" href="#"><span class="hashtag-symbol">#</span><span class="hashtag-text">'.$hashtag_header.'</span></a>';
		$html_temp .= '</div>';
		$html_temp .= '<p class="section-description">'.$hashtag_description.'</p>';
		$html_temp .= '<div class="photo-row">';
			$html_temp .= '<a href="/photo/"><img src='.$img_array[0].'" class="photo-row-img photo-row-img-transition-one"></a>';
			$html_temp .= '<a href="/photo/"><img src='.$img_array[1].'" class="photo-row-img photo-row-img-transition-two"></a>';
			$html_temp .= '<a href="/photo/"><img src='.$img_array[2].'" class="photo-row-img photo-row-img-transition-three"></a>';
			$html_temp .= '<a href="/photo/"><img src='.$img_array[3].'" class="photo-row-img photo-row-img-transition-one"></a>';
			$html_temp .= '</div>';
		$html_temp .= '</div>';
		$html_temp .= '</div>';
	
	return $html_temp;
	}

function splash_cloud($hashtag_header, $hashtag_array) {
	$html_temp .= '<div class="body-section-background">';
	$html_temp = null;
	$html_temp .= '<div class="body-section">';
		$html_temp .= '<div class="section-header">';
			$html_temp .= '<a class="hashtag-link hashtag-link-transition-one hashtag-'.strtolower($hashtag_header).'" href="#"><span class="hashtag-symbol">#</span><span class="hashtag-text">'.$hashtag_header.'</span></a>';
			$html_temp .= '</div>';
		$html_temp .= '<div class="tag-cloud">';
			foreach ($hashtag_array as $hashtag_temp):
				$html_temp .= '<a class="hashtag-link hashtag-link-transition-two hashtag-'.strtolower($hashtag_temp).'" href="#"><span class="hashtag-symbol">#</span><span class="hashtag-text">'.$hashtag_temp.'</span></a>';
				endforeach;
			$html_temp .= '</div>';
		$html_temp .= '</div>';
		$html_temp .= '</div>';
	
	return $html_temp;
	}

// Album
$img_array = [
	'https://images.unsplash.com/photo-1621874098652-168c080d322f?q=80&w=1287&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
	'https://images.unsplash.com/photo-1652636142954-93119fd21a10?q=80&w=2340&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
	'https://plus.unsplash.com/premium_photo-1674933004116-5dd4847415e6?q=80&w=2342&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
	'https://images.unsplash.com/photo-1631596894386-e5265fdf33f5?q=80&w=1287&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
	'https://plus.unsplash.com/premium_photo-1667547793425-42d6f4fbc69b?q=80&w=2340&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
	'https://images.unsplash.com/photo-1631596894729-4c8d7463bd61?q=80&w=1287&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
	];
$html_temp .= splash_album ("TelAviv", "Color, energy, and calm at the Mediterranean's edge.", $img_array);

// Tag cloud
$html_temp .= splash_cloud ("QueerIdentity", [ "NSFW", "couples", "families", "trans", "nonbinary", "advocacy", "lesbians" ]);

// Album
$img_array = [
	'https://cdn.myportfolio.com/edcae732-6d45-4207-bf20-5f1fad45d9f8/8c15e766-861d-4ffc-85ad-d841942e5a30_rw_1200.jpg?h=37e4c970d08a15ac361a149dc59f3466',
	'https://cdn.myportfolio.com/edcae732-6d45-4207-bf20-5f1fad45d9f8/9bbe2424-dbf5-4232-9aef-d0fa1030a54f_rw_600.jpg?h=f0881407ab26553b4913a01c179a75e3',
	'https://cdn.myportfolio.com/edcae732-6d45-4207-bf20-5f1fad45d9f8/88d49c26-0e18-4dde-a8d7-639f651f41e7_rw_1200.jpg?h=1fa631133d6f9c7cfbff286b9ade9a3c',
	'https://cdn.myportfolio.com/edcae732-6d45-4207-bf20-5f1fad45d9f8/8c15e766-861d-4ffc-85ad-d841942e5a30_rw_1200.jpg?h=37e4c970d08a15ac361a149dc59f3466',
	];
$html_temp .= splash_album ("BlackJewish", "Heritage rooted in millennia of tradition.", $img_array);

// Tag cloud
$html_temp .= splash_cloud ("landscapes", [ "beach", "sunset", "desert", "sky", "forest", "urban" ]);

// Album
$img_array = [
	'https://cdn.myportfolio.com/edcae732-6d45-4207-bf20-5f1fad45d9f8/a61ed5cd-0b24-45dd-82e9-a1341314b93b_rw_1920.jpg?h=f7e593cc8f314d4f629ff87b14be957f',
	'https://cdn.myportfolio.com/edcae732-6d45-4207-bf20-5f1fad45d9f8/9bbe2424-dbf5-4232-9aef-d0fa1030a54f_rw_600.jpg?h=f0881407ab26553b4913a01c179a75e3',
	'https://cdn.myportfolio.com/edcae732-6d45-4207-bf20-5f1fad45d9f8/88d49c26-0e18-4dde-a8d7-639f651f41e7_rw_1200.jpg?h=1fa631133d6f9c7cfbff286b9ade9a3c',
	'https://cdn.myportfolio.com/edcae732-6d45-4207-bf20-5f1fad45d9f8/8c15e766-861d-4ffc-85ad-d841942e5a30_rw_1200.jpg?h=37e4c970d08a15ac361a149dc59f3466',
	];
$html_temp .= splash_album ("Jerusalem", "Ancient and modern meet.", $img_array);

// Tag cloud
// $html_temp .= splash_cloud ("SacredSpecies", [ "pomegranate", "date", "fig", "olive", "grape", "barley", "wheat"  ]);

$html_temp .= '</div>';

$html_temp .= '</main>';

$html_temp .= html_end();

echo $html_temp;

?>
