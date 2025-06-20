<?

$css_array = [

":root"	=> [
	"--bg"				=> "rgb(235,235,235)",
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
	"font-family" 			=> "'Georgia', serif",
	"background"			=> "var(--bg)",
	"color"				=> "var(--text)",
	"line-height"			=> "1.6",
	"padding"			=> "0 0 0 0",
	"margin"			=> "0",
	],

"header" => [
	"position"			=> "fixed",
	"top"				=> "0",
	"width"				=> "100%",
	"backdrop-filter"		=> "blur(10px)",
	"background"			=> "linear-gradient(45deg, rgba(255, 255, 255, 0.7) 15%, rgba(255, 255, 255, 0.3) 80%, rgba(255, 255, 255, 0.6) 100%)",
	"z-index"			=> "999",
	"display"			=> "block",
	"text-align"			=> "center",
	"padding"			=> "1em 0",
	"font-family"			=> "'Rubik Maps', sans-serif",
	],

".header-logo" => [
	"display"			=> "inline-block",
	"float"				=> "left",
	"margin"			=> "0 1em",
	"font-family"			=> "'Tilt Warp'",
 	"font-size"			=> "1.8em",
	"line-height"			=> "1.6em",
	"font-weight"			=> "bold",
	"background"			=> "linear-gradient(45deg,rgba(30, 175, 200, 1) 20%, rgba(0, 15, 195, 1))",
	"-webkit-background-clip"	=> "text",
	"color"				=> "transparent",
	],

"a" => [
	"text-decoration"		=> "inherit",
	"color"				=> "inherit",
	],

".search-box" => [
	"display"			=> "inline-block",
	"font-family"			=> "'Helvetica'",
	"float"				=> "right",
	"width"				=> "340px",
	"margin"			=> "0 2em",
	"padding"			=> "10px 12px",
	"font-size"			=> "1em",
	"border-radius"			=> "25px",
	"border"			=> "2px solid rgba(255,255,255,0.6)",
	"backdrop-filter"		=> "blur(10px)",
	"background"			=> "linear-gradient(65deg,rgba(255,255,255,0.6) 15%,rgba(255,255,255,0.1) 60%,rgba(255,255,255,0.3))",
	"outline"			=> "none",
	],

".body-tagline" => [
	"display"			=> "block",
	"max-width"			=> "400px",
	"margin"			=> "200px auto 20px",
	"text-align"			=> "center",
	"Font-size"			=> "3em",
	"line-height"			=> "2em",
	"font-family"			=> "'Tilt Warp'",
	"background"			=> "linear-gradient(-200deg,rgba(30, 175, 200, 1) 40%, rgba(0, 15, 195, 0.8))",
	"-webkit-background-clip"	=> "text",
 	"color"				=> "transparent",
	],

".body-tagline-description" => [
	"font-size"			=> "1.3em",
	"line-height"			=> "2em",
	"opacity"			=> "0.7",
	"clear: "			=> "both",
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
	"background-size:"		=> "cover",
	],

".body-section-overlay" => [
	"margin"			=> "10px",
	"outline"			=> "13px solid rgba(235,235,235,0.5)",
	"border-radius"			=> "17px",
	"background"			=> "linear-gradient(170deg,rgba(235,235,235,0.9) 30%,rgba(235,235,235,0.1) 70%, rgba(235,235,235,0))",
	],

".body-section" => [
	"display"			=> "block",
	"backdrop-filter"		=> "opacity(0.5) blur(25px)",
	"padding"			=> "50px 20px",
	"text-align"			=> "center",
	"vertical-align"		=> "middle",
	],

".album-flex" => [
	"margin"			=> "35px auto 0",
//	"display"			=> "block",
	"width"				=> "100%",
//	"text-align"			=> "center",
//	"vertical-align"		=> "middle",
	"display"			=> "grid",
	"gap"				=> "10px",
	"grid-template-columns"		=> "epeat(auto-fill, minmax(120px, 1fr))",
	"grid-template-rows"		=> "masonry",
//	"flex-wrap"			=> "wrap",
//	"justify-content"		=> "space-between",
 	],

".album-flex-item" => [
	"padding"			=> "0",
	],
	
".album-flex-item-img" => [
	"max-height"			=> "250px",
	"border-radius"			=> "10px",
	"padding"			=> "0",
	"margin"			=> "0",
	],

".section-description" => [
	"max-width"			=> "300px",
	"font-size"			=> "1.6em",
	"color"				=> "#444",
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
	"font-family"			=> "'Rubik Maps'",
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
	"font-family"			=> "'Major Mono Display', 'Noto Sans Mono', 'Verdana'",
	"font-weight"			=> "700",
	"transform"			=> "translateY(-10px) rotate(5deg)",
	],

".hashtag-text" => [
	"font-family"			=> "Monoton, 'Noto Sans Mono', sans-serif",
	"font-weight"			=> "400",
	"font-size"			=> "1.3em",
	"color"				=> "inherit",
	"line-height"			=> "1.6em",
	"text-decoration"		=> "underline",
	"text-decoration-style"		=> "wavy",
	"text-decoration-color"		=> "inherit",
	"cursor"			=> "pointer",
	],

".section-header" => [
	"font-size"			=> "2.7em",
	],

"a, a:visited" => [
	"color"				=> "inherit",
	],

];

?>
