<?

$heading_font = "'Tilt Warp'";
$body_font = "'Georgia', serif";
$search_font = "'Helvetica'";
$hashtag_heading_font = "Monoton, sans-serif";
$hashtag_general_font = "'Rubik Mono One', sans-serif";

$dark_color		= "rgb(15,15,15)";
$light_color		= "rgb(235,235,235)";
$logo_color_primary	= "rgba(30, 175, 200, 1)";
$logo_color_secondary	= "rgba(0, 15, 195, 1)";

$css_array = [

":root"	=> [
	"--bg"				=> $light_color,
	"--text"			=> "#111",
	"--accent"			=> "#111",
	],

"*" => [
	"margin"			=> "0",
	"padding"			=> "0",
	"box-sizing"			=> "border-box",
	],

"body" => [
	"text-align" 			=> "center",
	"font-family" 			=> $body_font,
	"background"			=> "var(--bg)",
	"color"				=> "var(--text)",
	"line-height"			=> "1.6",
	"padding"			=> "0 0 0 0",
	"margin"			=> "0",
	],

// "header" => [
//	"position"			=> "fixed",
//	"top"				=> "0",
//	"width"				=> "100%",
//	"backdrop-filter"		=> "blur(10px)",
//	"background"			=> "linear-gradient(110deg,rgba(235, 235, 235, 0.85) 20%, rgba(235, 235, 235, 0.2) 60%, rgba(245, 245, 245, 0.85))",
//	"z-index"			=> "999",
//	"display"			=> "block",
//	"text-align"			=> "center",
//	"padding"			=> "1em 0",
//	],

"header" => [
//	"position"			=> "fixed",
//	"top"				=> "0",
	"width"				=> "100%",
//	"backdrop-filter"		=> "blur(10px)",
//	"background"			=> "linear-gradient(110deg,rgba(235, 235, 235, 0.85) 20%, rgba(235, 235, 235, 0.2) 60%, rgba(245, 245, 245, 0.85))",
//	"z-index"			=> "999",
	"display"			=> "block",
	"text-align"			=> "center",
	"padding"			=> "1em",
	],
	
".header-logo" => [
	"display"			=> "block",
	"text-align"			=> "left",
//	"float"				=> "left",
	"margin"			=> "0 1em 2em",
	"font-family"			=> $heading_font,
 	"font-size"			=> "1.8em",
	"line-height"			=> "1.6em",
	"font-weight"			=> "bold",
	"background"			=> "linear-gradient(45deg, ".$logo_color_primary." 20%, ".$logo_color_secondary.")",
	"-webkit-background-clip"	=> "text",
	"color"				=> "transparent",
	],

"a" => [
	"text-decoration"		=> "inherit",
	"color"				=> "inherit",
	],

".search-box" => [
	"display"			=> "block",
	"font-family"			=> $search_font,
//	"float"				=> "right",
	"width"				=> "340px",
	"max-width"			=> "90%",
	"margin"			=> "2em auto",
	"padding"			=> "20px 30px",
	"font-size"			=> "1.4em",
	"border-radius"			=> "25px",
//	"border"			=> "3px solid ".$logo_color_primary,
	"backdrop-filter"		=> "blur(10px)",
	"background"			=> "linear-gradient(65deg,rgba(255,255,255,0.6) 15%,rgba(255,255,255,0.1) 60%,rgba(255,255,255,0.3))",
	"outline"			=> "none",

	"border"			=> "5px solid",
	"border-image-slice"		=> "1",
	"border-image-source"		=> "linear-gradient(to left, ".$logo_color_primary.", ".$logo_color_secondary.")",
	],

".body-tagline" => [
	"display"			=> "block",
	"max-width"			=> "400px",
	"margin"			=> "200px auto 20px",
	"text-align"			=> "center",
	"Font-size"			=> "3em",
	"font-family"			=> $heading_font,
	"color"				=> $dark_color,
//	"background"			=> "linear-gradient(-200deg,rgba(30, 175, 200, 1) 40%, rgba(0, 15, 195, 0.8))",
//	"-webkit-background-clip"	=> "text",
// 	"color"				=> "transparent",
	],

".body-tagline-primary-color, .body-tagline-secondary-color" => [
	"background"			=> "linear-gradient(-200deg, ".$logo_color_primary." 40%, ".$logo_color_secondary.")",
	"-webkit-background-clip"	=> "text",
 	"color"				=> "transparent",
	],

// ".body-tagline-primary-color" => [
//	"color"				=> $logo_color_primary,
//	],

// ".body-tagline-secondary-color" => [
//	"color"				=> $logo_color_secondary,
//	],

".body-tagline-description" => [
	"font-size"			=> "1.3em",
	"opacity"			=> "0.7",
	"clear"				=> "both",
	"display"			=> "inline-block",
	"max-width"			=> "700px",
	"padding"			=> "0 30px",
	"margin"			=> "0 auto 80px",
	"text-align"			=> "center",
	"letter-spacing"		=> "0",
	],

".link-animation" => [
	"display"			=> "inline-block",
	"Text-decoration"		=> "underline",
	"Text-decoration-style"		=> "dotted",
	"text-shadow"			=> "10px 10px 5px rgba(50,50,50,0.05)",
	], 

"main" => [
	"padding"			=> "0",
	"margin"			=> "0",
	], 

".body-sections" => [
	"display"			=> "block",
	"padding"			=> "20px",
	"width"				=> "100%",
	],

".body-section-background" => [
	"box-shadow"			=> "0 -20px 40px -30px rgba(50,50,50,0.2)",
	"border"			=> "0 solid rgba(255,255,255,1)",
	"box-sizing"			=> "border-box",
	"-moz-box-sizing"		=> "border-box",
	"-webkit-box-sizing"		=> "border-box",
	"margin"			=> "63px auto",
	"border-radius"			=> "20px",
	"display"			=> "block",
	"max-width"			=> "1200px",
	"overflow"			=> "hidden",
	"background-repeat"		=> "no-repeat",
	"background-attachment"		=> "fixed",
	"background-position"		=> "center",
	"background-size"		=> "cover",
	],

".body-section-overlay" => [
	"margin"			=> "10px",
	"outline"			=> "13px solid rgba(235,235,235,0.5)",
	"border-radius"			=> "17px",
	"background"			=> "linear-gradient(170deg,rgba(235,235,235,0.9) 30%,rgba(235,235,235,0.1) 80%, rgba(235,235,235,0.4))",
	],

".body-section" => [
	"display"			=> "block",
	"backdrop-filter"		=> "opacity(0.5) blur(25px)",
	"padding"			=> "50px 20px",
	"text-align"			=> "center",
	"vertical-align"		=> "middle",
	],

".section-description" => [
	"font-size"			=> "1.6em",
	"margin-bottom"			=> "1.4em",
	"margin-top"			=> "1em",
	"max-width"			=> "400px",
	"margin-left"			=> "auto",
	"margin-right"			=> "auto",
	"color"				=> "#444",
	],

".photo-row" => [
	"margin"			=> "35px auto 0",
	"display"			=> "block",
	"max-width"			=> "1200px",
	"text-align"			=> "center",
	"vertical-align"		=> "middle",
 	],

".photo-row-img" => [
	"width"				=> "auto",
	"height"			=> "210px",
	"border-radius"			=> "10px",
	"border"			=> "0 solid rgba(235,235,235,1)",
	"box-sizing"			=> "border-box",
	"-moz-box-sizing"		=> "border-box",
	"-webkit-box-sizing"		=> "border-box",
	"padding"			=> "0",
	"display"			=> "inline-block",
	"margin"			=> "20px",
	], 

// Discontinued
".photo-row-img-container" => [
	"width"				=> "auto",
	"height"			=> "210px",
	"border-radius"			=> "10px",
	"border"			=> "0 solid rgba(235,235,235,1)",
	"box-sizing"			=> "border-box",
	"-moz-box-sizing"		=> "border-box",
	"-webkit-box-sizing"		=> "border-box",
	"padding"			=> "0",
	"display"			=> "inline-block",
	"margin"			=> "20px",
	"text-align"			=> "center",
	"overflow"			=> "hidden",
	"background-repeat"		=> "no-repeat",
	"background-attachment"		=> "fixed",
	"background-position"		=> "center",
	"background-size"		=> "cover",
	], 

".tag-cloud" => [
	"font-size"			=> "1.5em",
	"gap"				=> "0.8em",
	"max-width"			=> "900px",
	"display"			=> "inline-block",
	"margin"			=> "50px auto",
	"margin-top"			=> "2em",
	"word-spacing"			=> "2em",
	"line-height"			=> "4em",
	],

"footer" => [
	"text-align"			=> "center",
	"padding"			=> "2em",
	"font-size"			=> "0.9em",
	"background"			=> "rgba(235,235,235,1)",
	"margin"			=> "200px 20px 200px",
	],

"footer a" => [
	"margin"			=> "0 0.5em",
	"text-decoration"		=> "none",
	"color"				=> "#333",
	],

".hashtag-link" => [
	"position"			=> "relative",
	"display"			=> "inline-block",
	"text-underline-offset"		=> "0.2em",
	"-webkit-background-clip"	=> "text",
 	"color"				=> "transparent",
	],

".hashtag-symbol" => [
	"content"			=> "#",
	"margin"			=> "0 5px 25px 15px",
	"text-decoration"		=> "none",
	"color"				=> "inherit",
	"font-size"			=> "60%",
	"font-family"			=> $heading_font,
//	"position"			=> "relative",
//	"bottom"			=> "5px",
	"font-weight"			=> "700",
	"transform"			=> "translateY(-10px) rotate(5deg)",
	],

".hashtag-text" => [
	"font-weight"			=> "400",
	"font-size"			=> "1.3em",
	"color"				=> "inherit",
	"line-height"			=> "1.6em",
	"text-decoration"		=> "underline",
	"text-decoration-style"		=> "wavy",
	"text-decoration-color"		=> "inherit",
	"cursor"			=> "pointer",
	],

".tag-cloud .hashtag-text" => [
	"font-family"			=> $hashtag_general_font,
	],

".section-header .hashtag-text" => [
	"font-family"			=> $hashtag_heading_font,
	],

".section-header" => [
	"font-size"			=> "2.7em",
	],

"a, a:visited" => [
	"color"				=> "inherit",
	],

];

?>
