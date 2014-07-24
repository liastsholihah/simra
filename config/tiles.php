<?php
/* All tiles on the homepage are configured here, be sure to check the tutorials/docs on http://metro-webdesign.info */

/* GROUP 1 */

$tile[] = array("type"=>"simple","group"=>0,"x"=>0,"y"=>0,'width'=>2,'height'=>2,"background"=>"#509601","url"=>"welcome.php",
"title"=>"Selamat Datang","text"=>"Kementerian Dalam Negeri mempunyai tugas menyelenggarakan urusan pemerintahan dalam negeri untuk membantu Presiden dalam menyelenggarakan pemerintahan negara. <br/> (Permendagri No.41/2010 Pasal 2 dan 3)
<p style='margin-top:7px;'> Sistem Informasi Realisasi Anggaran versi 1.0 memungkinkan pengguna untuk mengelola data anggaran di setiap daerah serta memberikan pengawasan yang terpusat.");

/*SLIDESHOW TILE - only in full version 
$tile[] = array("type"=>"slideshow","group"=>0,"x"=>0,"y"=>1,"width"=>1,"height"=>1,"background"=>"#6950ab","url"=>"welcome.php",
	"images"=>array("img/img1.png","img/img2.jpg","img/img3.jpg"),
	"effect"=>"slide-right","speed"=>5000,"arrows"=>true,
	"labelText"=>"Slideshow","labelColor"=>"#11528f","labelPosition"=>"bottom",
	"classes"=>"noClick");*/

$tile[] = array("type"=>"scrollText","group"=>0,"x"=>2,"y"=>1,"width"=>1,"height"=>2,"background"=>"#FF8000","url"=>"external:panels/example.php",
"title"=>"Berita Terbaru","text"=>array(
"A sidepanel will come from the right, watch out!",
"Okay, and what you are watching now is a scroll live tile...",
"which can be very cool",
"to open a sidepanel, check this source code in tiles.php"
),"scrollSpeed"=>2500);

$tile[] = array("type"=>"simple","group"=>0,"x"=>0,"y"=>2,'width'=>2,'height'=>1,"background"=>"#6950AB","url"=>"newtab:http://metro-webdesign.info/#!/docs-and-tutorials",
	"title"=>"<span style='font-size:24px;'>Buku Panduan</span>",
	"text"=>"Unduh buku panduan untuk menjalankan Sistem Informasi Monitoring Realisasi Anggaran ver 1.0",
	"img"=>"img/icons/box_warning.png","imgSize"=>"50","imgToTop"=>"5","imgToLeft"=>"5",
	"labelText"=>"SIM Realisasi Anggaran","labelColor"=>"#453B5E","labelPosition"=>"bottom");

$tile[] = array("type"=>"custom","group"=>0,"x"=>2,"y"=>0,'width'=>1,'height'=>1,"background"=>"#11528f","url"=>"typography.php",
"content"=>
"<div style='line-height:30px; margin-top:5px;'>
<div style='color:#FFF;font-size:23px;line-heigt:70px;'>Tentang</div>
<br/>
<div style='font-size:57px;line-height:30px;'><strong>Kami</strong></div>
</div>");

/* GROUP 2*/
/*<br />
SLIDEFX TILE -  only in full version 
$tile[] = array("type"=>"slidefx","group"=>1,"x"=>0,"y"=>0,'width'=>2,'height'=>1,"background"=>"#333","url"=>"external:img/metro_slide.png",
	"text"=>"Click to see in full","img"=>"img/metro_slide_300x150.png","classes"=>"lightbox"
);
*/

$tile[] = array("type"=>"slide","group"=>1,"x"=>0,"y"=>0,'width'=>1,'height'=>1,"background"=>"#00BFFF","url"=>"sidebars.php",
	"text"=>"Program SEKJEN","img"=>"img/metro_slide_300x150_2.png","imgSize"=>1,
	"slidePercent"=>0.40,
	"slideDir"=>"up", // can be up, down, left or right
	"doSlideText"=>true,"doSlideLabel"=>true,
	"labelText"=>"Dukungan Manajemen dan Pelaksanaan Tugas Teknis Lainnya Kemendagri","labelColor"=>"#00BFFF","labelPosition"=>"top",
);
$tile[] = array("type"=>"slide","group"=>1,"x"=>1,"y"=>0,'width'=>1,'height'=>1,"background"=>"#00BFFF","url"=>"sidebars.php",
	"text"=>"Program SEKJEN","img"=>"img/metro_slide_300x150_2.png","imgSize"=>1,
	"slidePercent"=>0.40,
	"slideDir"=>"up", // can be up, down, left or right
	"doSlideText"=>true,"doSlideLabel"=>true,
	"labelText"=>"Peningkatan Sarana dan Prasarana Aparatur","labelColor"=>"#00BFFF","labelPosition"=>"top",
);

$tile[] = array("type"=>"slide","group"=>1,"x"=>0,"y"=>1,'width'=>1,'height'=>1,"background"=>"#b1dc06","url"=>"sidebars.php",
	"text"=>"Program IPDN","img"=>"img/metro_slide_300x150_2.png","imgSize"=>1,
	"slidePercent"=>0.40,
	"slideDir"=>"up", // can be up, down, left or right
	"doSlideText"=>true,"doSlideLabel"=>true,
	"labelText"=>"Pendidikan Kepamongprajaan","labelColor"=>"#b1dc06","labelPosition"=>"top",
);
$tile[] = array("type"=>"slide","group"=>1,"x"=>1,"y"=>1,'width'=>1,'height'=>1,"background"=>"#a912c4","url"=>"sidebars.php",
	"text"=>"Program Badan Diklat","img"=>"img/metro_slide_300x150_2.png","imgSize"=>1,
	"slidePercent"=>0.40,
	"slideDir"=>"up", // can be up, down, left or right
	"doSlideText"=>true,"doSlideLabel"=>true,
	"labelText"=>"Pendidikan dan Pelatihan Aparatur Kementerian Dalam Negeri","labelColor"=>"#a912c4","labelPosition"=>"top",
);

/*
SLIDESHOW TILE - only in full version
$tile[] = array("type"=>"slideshow","group"=>1,"x"=>2,"y"=>0,"width"=>1,"height"=>1,"background"=>"#6950ab","url"=>"newtab:http://google.com",
	"images"=>array("img/chars/a.png","img/chars/b.png","img/chars/c.png","img/chars/d.png","img/chars/e.png","img/chars/f.png","img/chars/g.png"),
	"effect"=>"slide-right, slide-left, slide-down, slide-up, flip-vertical, flip-horizontal, fade",
	"speed"=>1500,"arrows"=>false,
	"labelText"=>"Random fx","labelColor"=>"#453B5E","labelPosition"=>"top");
*/

/*FLIP TILE - only in full version
$tile[] = array("type"=>"flip","group"=>1,"x"=>2,"y"=>1,'width'=>1,'height'=>1,"background"=>"#C82345","url"=>"accordions.php","img"=>"img/metro_150x150.png",
	"text"=>"<h4 style='color:#FFF;'>Click for accordions!</h4>");
*/
	
/* GROUP 3 */
$tile[] = array("type"=>"img","group"=>2,"x"=>0,"y"=>0,'width'=>1,'height'=>1,"background"=>"#0F6D32","url"=>"",
	"img"=>"img/img3.jpg","desc"=>"By adding the CSS class 'noClock' to this tile, we've achieved that there is no hover effect!",
	"showDescAlways"=>true,"imgWidth"=>1,"imgHeight"=>1,
	"labelText"=>"Img Tile","labelColor"=>"#509601","labelPosition"=>"bottom", "classes"=>"noClick");
	
$tile[] = array("type"=>"slide","group"=>2,"x"=>1,"y"=>0,'width'=>2,'height'=>1,"background"=>"#FE2E64","url"=>"",
	"text"=>"<h3>No click</h3>","img"=>"img/metro_slide_300x150_2.png","imgSize"=>1,
	"slidePercent"=>0.50,
	"slideDir"=>"left", // can be up, down, left or right
	"doSlideText"=>false,"doSlideLabel"=>false,
	"labelText"=>"Other direction slide","labelColor"=>"#CC1A46","labelPosition"=>"top",
	"classes"=>"noClick"
);

?> 