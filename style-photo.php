<?

$css_array = [

".photo-splash-img-background" => [
	"position"			=> "relative",
	"left"				=> "0",
	"right"				=> "0",
	"top"				=> "0",
	"bottom"			=> "0",
	"width"				=> "100%",
	"height"			=> "100%",
	"background-repeat"		=> "no-repeat",
	"background-attachment"		=> "fixed",
	"background-position"		=> "center",
	"background-size"		=> "cover",
	],


".photo-splash-img-overlay" => [
	"backdrop-filter"		=> "blur(40px)",
	"left"				=> "0",
	"top"				=> "0",
	"width"				=> "100%",
	"height"			=> "100%",
	"padding"			=> "50px 20px 0 0",
	"display"			=> "flex",
	"height"			=> "100vh",
	"align-items"			=> "center",
	],

".photo-splash-img-fadeout" => [
	"position"			=> "absolute",
	"left"				=> "0",
	"bottom"			=> "-1px",
	"width"				=> "100%",
	"height"			=> "300px",
	"background"			=> "linear-gradient(0,rgba(215,215,215,1) 5%,rgba(215,215,215,0))",
	],


".photo-splash-img" => [
	"border-radius"			=> "10px",
	"margin"			=> "0 auto",
	"max-height"			=> "75%",
	"max-width"			=> "75%",
	"outline"			=> "5px solid rgba(215,215,215,0.3)",
	"box-shadow"			=> "0 40px 20px -25px rgba(50,50,50,0.3)",
	"z-index"			=> "99",
	"transition"			=> "max-width 0.5s ease,  max-height 0.5s ease",
	],

".photo-splash-img:hover" => [
	"max-width"			=> "80%",
	"max-height"			=> "80%",
	],

".photo-splash-story" => [
	"margin"			=> "0 auto",
	"padding"			=> "20px",
	"max-width"			=> "700px",
	"min-height"			=> "500px",
	],

".photo-splash-story-caption" => [
	"text-align"			=> "left",
	"font-size"			=> "1.4em",
	"line-height"			=> "1.4em",
	"transition"			=> "line-height 0.5s ease",
	],

".photo-splash-story-caption:hover" => [
	"line-height"			=> "2.5em",
	],

".photo-splash-button-container" => [
	"position"			=> "relative",
	"top"				=> "-75px",
	"display"			=> "block",
	"z-index"			=> "399",
	"margin"			=> "20px 40px",
	],

".photo-splash-button" => [
	"font-family"			=> "'Secular One'",
	"line-height"			=> "1em",
	"font-size"			=> "1em",
	"Font-weight"			=> "400",
	"Background"			=> "linear-gradient(45deg, rgba(235,235,235,0.4) 20%, rgba(235,235,235,0.1) 70%, rgba(235,235,235,0.8))",
	"display"			=> "inline-block",
	"border"			=> "0 solid rgba(50,50,50,0.3)",
	"border-radius"			=> "50px",
	"padding"			=> "10px 32px 10px 25px",
	"margin"			=> "20px",
	"box-shadow"			=> "5px 5px 15px -5px rgba(50,50,50,0.3)",
	"transition"			=> "border 0.3s ease, transform 0.5s ease, box-shadow 0.3s ease, color 0.3s ease",
	"color"				=> "rgba(50,50,50,0.6)",
	],

".material-symbols-outlined" => [
	"font-size"			=> "1.1em",
	],

".photo-splash-button:hover" => [
	"box-shadow"			=> "10px 10px 20px -10px rgba(50,50,50,0.3)",
	"transform"			=> "translateY(-10px) rotate(0deg)",
	"border"			=> "0 solid rgba(50,50,50,0.5)",
	"color"				=> "rgba(50,50,50,0.9)",
	],

".photo-splash-button span" => [
	"vertical-align"		=> "bottom",
	],

".photo-splash-button span + span" => [
	"padding"			=> "0 0 0 10px",
	],
	
];
 
?>
