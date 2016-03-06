<html>
<head>
<title>BIZ-Guide</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<link href="style.css" rel="stylesheet" type="text/css">

<link href="css/layout1.css" rel="stylesheet" type="text/css">

<!-- jQuery (required) -->
	<script src="js/jquery.min.js"></script>

	<!-- AnythingSlider -->
	<link rel="stylesheet" href="css/anythingslider.css">
	<script src="js/jquery.anythingslider.js"></script>

	<!-- AnythingSlider video extension; optional, but needed to control video pause/play -->
	<script src="js/jquery.anythingslider.video.js"></script>

	<!-- Ideally, add the stylesheet(s) you are going to use here,
	 otherwise they are loaded and appended to the <head> automatically and will over-ride the IE stylesheet below -->
	<link rel="stylesheet" href="css/theme-metallic.css">
	<link rel="stylesheet" href="css/theme-minimalist-round.css">
	<link rel="stylesheet" href="css/theme-minimalist-square.css">
	<link rel="stylesheet" href="css/theme-construction.css">
	<link rel="stylesheet" href="css/theme-cs-portfolio.css">

	<!-- Older IE stylesheet, to reposition navigation arrows, added AFTER the theme stylesheet above -->
	<!--[if lte IE 7]>
	<link rel="stylesheet" href="css/anythingslider-ie.css" type="text/css" media="screen" />
	<![endif]-->

	<script>
		// Set up Sliders
		// **************
		$(function(){

			$('#slider1').anythingSlider({
				startStopped    : true,  // If autoPlay is on, this can force it to start stopped
				width           : 650,   // Override the default CSS width
				theme           : 'metallic',
				easing          : 'easeInOutBack',
				autoPlayLocked  : true,  // If true, user changing slides will not stop the slideshow
				resumeDelay     : 10000, // Resume slideshow after user interaction, only if autoplayLocked is true (in milliseconds).
				onSlideComplete : function(slider){
					// alert('Welcome to Slide #' + slider.currentPage);
				}
			});

			$('#slider2').anythingSlider({
				width               : 500,   // if resizeContent is false, this is the default width if panel size is not defined
				height              : 350,   // if resizeContent is false, this is the default height if panel size is not defined
				resizeContents      : false, // If true, solitary images/objects in the panel will expand to fit the viewport
				startStopped        : true,  // If autoPlay is on, this can force it to start stopped
				navigationFormatter : function(index, panel){ // Format navigation labels with text
					return ['Recipe', 'Quote', 'Image', 'Quote #2', 'Image #2'][index - 1];
				}
			});

		});
	</script>

    <style type="text/css">
<!--
.style1 {color: #0000FF}
.style2 {font-family: Arial, Helvetica, sans-serif}
.style4 {
	font-family: Arial, Helvetica, sans-serif;
	font-style: italic;
	font-weight: bold;
}
-->
    </style>
</head>
<?php include("newm.php");?>

<body >
<div id="wrapper_main"><div id="main_sidebar_left">
  <p>&nbsp;</p>
   <a href="register.php" target="container"><img src="images/button_stu.jpg" alt="credentials" width="98%" height="60"></a>
  <p>&nbsp;</p>
  <a href="register3.php" target="container"><img src="images/button_bc.jpg" alt="decision" width="98%" height="60"></a>
  <p>&nbsp;</p>
  <a href="swcred.php" target="container"><img src="images/button_com.jpg" alt="feasibility" width="98%" height="60"></a>   
  </p>
  <p>&nbsp;</p>
</div>

<div id="main_container">
 
<iframe width="650" src="main_masala.php" scrolling="no" name="container" height=100% scrolling="yes" frameborder="0"></iframe>
</div>

<div id="main_sidebar_right">
<p><h4>REPORTS and GRAPHS</h4>
<p>&nbsp;</p>
</p>

<div class="main_links_column_first">
    <div class="main_strip_right">
      <p>&nbsp;</p>
      <ul class="main_links">
        <h5>
			<li><a href="report.txt" target="container">Biz Monk Report</a></li>
			<li><a href="Competition_Financial_Rating.txt" target="container">Financial Report</a></li>
			<li><a href="graph.php" target="container">Financial Graph</a></li>
			<li><a href="pie.php" target="container">Financial Pie Chart</a></li>
			<li><a href="Competition_Credibility_Rating.txt" target="container">Credibility Report</a></li>
			<li><a href="graph2.php" target="container">Credibility Graph</a></li>
			<li><a href="pie2.php" target="container">Credibility Pie Chart</a></li>
			<li><a href="budget_rating_graph.php" target="container">Budget Rating Graph</a></li>
			<li><a href="HR.txt" target="container">Human Resource Report</a></li>
			<li><a href="city_amenities_graph.php" target="container">City Basic Amenities Chart</a></li>
			<li><a href="city_location_finder_graph.php" target="container">City Location Finder Chart</a></li>
        </h5>
      </ul>
    </div>
  </div>

<!--<div class="message_box"><a href="graph.php" target="container"><img src="images/bargraph.jpg" width="98%" height="120 /></a>
</div>
<p><h4>Competition Credibility Analysis Report</h4>
<p>&nbsp;</p>
</p>
<div class="message_box"><a href="graph2.php" target="container"><img src="images/bargraph2.jpg" width="98%" height="120"></a>
<a href="pie.php" target="container"><img src="images/pie-chart.png" width="98%" height="120"></a>
<a href="pie2.php" target="container"><img src="images/pie-chart2.png" width="98%" height="120"></a>
</div>  
->
<h4>&nbsp;</h4></p>

<!--right sidebar end-->
</div>

<div>
<?php //include("footer.php");?>
</div>
</body>
</html>