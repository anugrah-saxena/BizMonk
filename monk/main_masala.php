<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Untitled Document</title>
<link href="style.css" rel="stylesheet" type="text/css">

<link href="css/layout1.css" rel="stylesheet" type="text/css">


<link href="css/menu.css" rel="stylesheet" type="text/css">
<!--[if IE]>
 <style type="text/css">
  body {word-wrap: break-word;}
 </style>
<![endif]-->

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
				width           : 500,   // Override the default CSS width
				theme           : 'metallic',
				easing          : 'easeInOutBack',
				autoPlayLocked  : true,  // If true, user changing slides will not stop the slideshow
				resumeDelay     : 10000, // Resume slideshow after user interaction, only if autoplayLocked is true (in milliseconds).
				onSlideComplete : function(slider){
					// alert('Welcome to Slide #' + slider.currentPage);
				}
			});

			$('#slider2').anythingSlider({
				width               : 600,   // if resizeContent is false, this is the default width if panel size is not defined
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
.style2 {
	font-family: Arial, Helvetica, sans-serif;
	font-style: italic;
}
-->
    </style>
</head>


<body>
<div  id="main_container">

  <table width=100% border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
     
      <tr>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td valign="top">
            
            
            
            
            
            
            <!-- AnythingSlider #1 -->
			<ul id="slider1">

				<li><img src="images/cp.jpg" alt=""></li>
					<li><img src="images/cp2.jpg" alt=""></li>

			

				
			

			</ul>  <!-- END AnythingSlider #1 -->

			<br><br>

			<!-- AnythingSlider #2 -->
  	<!-- END AnythingSlider #2 -->            </td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
</table>

<p>&nbsp;</p>
<p>&nbsp;</p>
<table width=500px border="0" cellspacing="2" cellpadding="2">
  <tr>
    <td width=5%></td>
     <td colspan="2" width="120px"><h5> Welcome to the  <span class="style1"><strong>Biz Guide</strong></span>.  Biz Guide</strong> is here to provide you with best possible solutions for your Business Startup and Extension plans including <span class="style1"><strong>Economical Feasiblity</strong></span> <span class="style1"><strong>Market Startegy</strong></span><span class="style1"> & <strong> Future Scope</strong></span>
    So go on... </h5></td>
  </tr>
  </table>
<p>&nbsp;</p>
<p>&nbsp;

<table width=500px border="0" cellspacing="2" cellpadding="2">
  <tr>
  	<td width="5%"></td>
    <td ><h4><img src="images/index.jpg" width="20" height="17"> Message from Biz-Guide</h4>
      <hr></td>
    </tr></table>

<table width=500px border="0" cellspacing="2" cellpadding="2">
 
  <tr>
  	<td width=5%></td>
    <td width=9%><img src="images/mnit_logo.png" width="59" height="71"></td>
    <td width="91%"><h5>We care for your time. Our Intelligent <strong> Prolog Based Engine </strong> developed after rigorous teamwork and testing will do most of Complex Work for you. Team Biz-Guide: Anugrah Arpit Anurag ; Mentor: Girdhari Singh Sir.</h5>
      </td>
  </tr></table>
</div>

</body>
</html>
