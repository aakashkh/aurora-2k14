<?php if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start(); ?>
<!DOCTYPE html>
<html>
<head>

<title>Aurora 2K14</title>

<meta name = "keywords" content = "Aurora,aurora,aurora2014,iiitm,gwalior" />
<meta name = "description" content = "Cultural Fest Of IIITM,Gwalior" />
<meta name="author" content="AURORA 2K14"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, minimum-scale=1 user-scalable=no">

<!--favicon-->
<link rel="icon" type="image/ico" href="images/favicon.ico"/>
<!--css-->
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/demo.css" />
<link rel="stylesheet" type="text/css" href="css/component.css" />
<link rel="stylesheet" type="text/css" href="css/events.css" />
<link rel="stylesheet" href="css/socialize-bookmarks.css">
<link rel="stylesheet" type="text/css" href="css/icon-effects.css" />

<!--contact us-->
<link rel="stylesheet" href="css/contact_style.css">

</head>
<body onload="setTimeout(function() { window.scrollTo(0, 1) }, 100);" id="bodyy"> 
	<!-- Overlay and popup -->
    <div class="md-modal md-effect-9" id="modal">
		<div class="md-content" style="max-height:100%;">
			<div id="modaltheme">
			<h3><div id="name"></div></h3>
			<div>
				<center><p><div id="tagline"></div></p></center>
				<div id="description" style="max-height:265px;overflow-y:auto;"></div>
				<button class="md-close" onClick="clo()">Close</button>
				</div>
			</div>
			</div>
	</div>
	<div class="md-overlay"></div>
	<!--ends -->
<div class="wrap">
<!--navigation bar-->
<div class="subMenu" >
	 	<div class="inner">
		<font color="white">
			<a href="#" id="sTop" class="subNavBtn" class="nav-logo"><img alt="aurora_logo" src="images/nav-logo.png" /></a>
	 		<a href="#" id="s1" class="subNavBtn"><font color="white">ABOUT</font></a> 
			<a href="#" id="s2" class="subNavBtn"><font color="white">EVENTS</font></a>
			<a href="#" id="s5" class="subNavBtn"><font color="white">SPONSORS</font></a>
			<a href="#" id="s6" class="subNavBtn"><font color="white">TEAM</font></a>
			<a href="#" id="s7" class="subNavBtn "><font color="white">CONTACT</font></a>
			<a href="gallery/gallery.html"  target="_blank" class="subNavBtn"><font color="white">GALLERY</font></a>
			<nav class="twelve columns">
			<ul class="social-bookmarks">
			  <li class="facebook"><a href="https://www.facebook.com/Aurora.IIITM" target="_blank">facebook</a></li>
			  <li class="youtube"><a href="https://www.youtube.com/user/auroraabviiitm" target="_blank">Youtube</a></li>
			</ul>  
			</nav>
		</div>		
</div>
<!--section sTop slideshow-->
<div class="section sTop">
		 <ul class="cb-slideshow">
            <li><span>Image 01</span><div><h3></h3></div></li>
            <li><span>Image 02</span><div></div></li>
            <li><span>Image 03</span><div></div></li>  
        </ul>
		<div class="container" style="max-width:100%">
                
				          <div style="opacity:1;" align="left"><img src="images/ui.png" alt="main_logo" width="300px" height="300px"></div>
        <div class="content" >
         <ul class="topmenu">
			<div class="md-trigger" data-modal="modal">
			<div  style="position:relative;  top: 16px;" > <li><a href="#"><img class="imageevent" alt="corna" src="images/corna.png" width=150 height=100 onclick="eventLoad('Corna')" ></a></li></div>
			</div>
			
			<div class="md-trigger" data-modal="modal"><center><div  style="position:relative;  top: 16px;" > <li><a href="#"><img class="imageevent" src="images/parivesh.png" width=150 height=100 onclick="eventLoad('Parivesh')"></a></li></div>
			</div>
			
			<div class="md-trigger" data-modal="modal">
			<div  style="position:relative;  top: 16px;" > <li><a href="#"><img class="imageevent" alt="pronite" src="images/pronite.png" width=150 height=100 onclick="eventLoad('Pronite')"></a></li></div>
			</div>
		
			<div class="md-trigger" data-modal="modal"><center><div  style="position:relative;  top: 16px;" > <li><a href="#"><img class="imageevent" src="images/hospi.png" width=150 height=100 onclick="eventLoad('Hospitality')"></a></li></div>
			</div>
		
			<div  style="position:relative;  top: 16px;" > <li><a href="gallery/gallery.html"target="_blank"><img  class="imageevent" alt="gallery" src="images/gallery.png" width=150 height=100 ></a></li></div>              
			
			<!--<div  style="position:relative;  top: 16px;" > <li><a href="#"><img class="imageevent" alt="app" src="images/app.png" width=150 height=80"></a></li>
			</div>-->
			</ul>
		</div>
		</div>
		<br class="clear">
</div>
<!--section s1 about-->
<div class="section s1">
	<div class="inner">
		<hr/>
		<h1 style="@font-face {
		font-family:lorena;
		src:url(css/fonts/lorena/Lorena.ttf);
		}; font-family:lorena; font-size: 1em;font-weight=5em; #000000;"><font  color="white" size="50em"  style="letter-spacing:2px;"><center>About</center></font>
		</h1>
		<hr/>
			<ul class="grid">
					<li class="ot-letter-right"><span data-letter="A">A</span></li>
					<li class="ot-letter-left"><span data-letter="U">U</span></li>
					<li class="ot-letter-top"><span data-letter="R">R</span></li>
					<li class="ot-letter-right"><span data-letter="O">O</span></li>
					<li class="ot-letter-left"><span data-letter="R">R</span></li>
					<li class="ot-letter-top"><span data-letter="A">A</span></li>
					<li class="ot-letter-bottom"><span data-letter="2">2</span></li>
					<li class="ot-letter-top"><span data-letter="K">K</span></li>
					<li class="ot-letter-right"><span data-letter="1">1</span></li>
					<li class="ot-letter-bottom"><span data-letter="4">4</span></li>			
			</ul>
			<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>		
		<div id="matter">			
		<p ><font  color="white" size="30em" style="letter-spacing:2px;"><b>Aurora 2K14 - A 3-day cultural festival of ABV-IIITM celebrating the amalgamation of Indian tradition with modern talent right in the heart of central India, here at ABV-IIITM Gwalior.Every year, Aurora represents a medley of artists from all over the country.It is the face of legendary performances, power-packed auditoriums and infinite enthusiasm.Aurora is not just a festival, it is a religion... </b>
		</font></p>
		</div>
	</div>
</div>
<!--seperator2-->	
<div class="section seperator2">
	<div class="inner">
		<div id="matter">
			<h1 style="@font-face {
			font-family:lorena;
			src:url(css/fonts/lorena/Lorena.ttf);
			}; font-family: 'Lorena'; font-size: 1em;font-weight=5em; #000000;"><font  color="white" size="30em" style="letter-spacing:2px;"><center>CORNA - The Rock Band Competition</B>
			<BR> 
			The most awaited rock fest of Central India is back.
			A Bonanza for rock music lovers…Time for people to tap their feet to the beats of the thrilling performances of music bands performing live on the stage of Aurora.</center></b></font></h1>
		</div>
	</div>
</div>
<!--section s2 events--> 
<div class="section s2">
		<div class="inner">
		<hr/>
		<h1 style="@font-face {
		font-family:lorena;
		src:url(css/fonts/lorena/Lorena.ttf);
		}; font-family:lorena; font-size: 1em;font-weight=5em; #000000;"><font  color="white" size="50em" style="letter-spacing:2px;" ><center>Events</center></font></h1><hr />
		<div class="container">
		<br>
		<center>
		<table>
		<tr>
		<td>
		<div class="md-trigger" data-modal="modal">
		<img class="imageevent" alt="art_mela" src="images/artmela.jpg"  onclick="eventLoad('Art Mela')" >&nbsp;&nbsp;&nbsp;
		</div>
		</td>
		<td>
		<div class="md-trigger" data-modal="modal">
		<img class="imageevent" alt="mr & ms. aurora" src="images/mnm.jpg" onclick="eventLoad('Mr and Ms Aurora')" >&nbsp;&nbsp;&nbsp;
		</div>                   
		</td>
		<td>
		<div class="md-trigger" data-modal="modal">
		<img class="imageevent" alt="aurora_idol" src="images/auroraidol.jpg" onclick="eventLoad('Aurora Idol')" >&nbsp;&nbsp;&nbsp;
		</div>                  
		</td>
		<td>
		<div class="md-trigger" data-modal="modal">
		<img class="imageevent" alt="street_play" src="images/streetplay.jpg" onclick="eventLoad('Street Play')" >&nbsp;&nbsp;&nbsp;
		</div>                  
		</td>
		<td>
		<div class="md-trigger" data-modal="modal">
		<img class="imageevent" alt="treasure_hunt" src="images/th.jpg" onclick="eventLoad('Treasure Hunt')" >&nbsp;&nbsp;&nbsp;
		</div>                  
		</td>
		</tr>
		</table>
		<br>
		<table>
		<tr>
		<td>
		<div class="md-trigger" data-modal="modal">
		<img class="imageevent" alt="laugh_out_loud" src="images/lol.jpg"  onclick="eventLoad('LAugH-OUt-LOuD')" >&nbsp;&nbsp;&nbsp;
		</div>
		</td>
		<td>
		<div class="md-trigger" data-modal="modal">
		<img class="imageevent" src="images/dance.jpg" alt="dance" onclick="eventLoad('Dance Carnival')" >&nbsp;&nbsp;&nbsp;
		</div>                   
		</td>
		<td>
		<div class="md-trigger" data-modal="modal">
		<img class="imageevent" alt="phoenix" src="images/phoenix.jpg" onclick="eventLoad('Phoenix')" >&nbsp;&nbsp;&nbsp;
		</div>                  
		</td>
		</tr>
		</table>
		<Br>
		<table>
		<tr>
		<td>
		<div class="md-trigger" data-modal="modal">
		<img class="imageevent" alt="literary_and_oratory" src="images/l&o.jpg"  onclick="eventLoad('Literary and Oratory')" >&nbsp;&nbsp;&nbsp;
		</div>
		</td>
		<td>
		<div class="md-trigger" data-modal="modal">
		<img class="imageevent" alt="snaptrap" src="images/snaptrap.jpg" onclick="eventLoad('Snap Trap')" >&nbsp;&nbsp;&nbsp;
		</div>                   
		</td>
		<td>
		<div class="md-trigger" data-modal="modal">
		<img class="imageevent" alt="qantakshari" src="images/antakshari.png" onclick="eventLoad('Phoenix')" >&nbsp;&nbsp;&nbsp;
		</div>                  
		</td>
		</tr>
		</table>
		</center>
		</div>
		</div>
</div>
<!--seperator1-->	
<div class="section seperator1"></div>

<!--section s4 sponsor--> 
<div class="section s5">
	<div class="inner">
		<hr/>
		<h1 style="@font-face {
		font-family:lorena;
		src:url(css/fonts/lorena/Lorena.ttf);
		}; font-family:lorena; font-size: 1em;font-weight=5em; #000000;"><font  color="white" size="50em" style="letter-spacing:2px;" ><center>Sponsors</center>
		<hr/>
		<br>
		<center>
		Coming Soon</font></h1>
		</center>
	</div>
</div>
<!--seperator 3-->
<div class="section seperator4">
		<div class="inner">
			<br>
			<div id="matter">			
		<h1 style="@font-face {
		font-family:lorena;
		src:url(css/fonts/lorena/Lorena.ttf);
		}; font-family:lorena; font-size: 1em;font-weight=5em; #000000;"><font  color="white" size="50em" style="letter-spacing:2px;" ><center>Parivesh-The Fashion Extravaganza</center></b><br>
		<center>Where style meets substance attitude finds a channel to ooze itself out of head. It provides you with an opportunity to portray your versatility in all aspects of clothing and fabulous styling whether it is a traditional Indian or a funky western outlook.</center></font></h1>
		</div>
	</div>
</div>
<!--section s6 crew-->
<div class="section s6">
	<div class="inner">
		<hr/>
		<h1 style="@font-face {
		font-family:lorena;
		src:url(css/fonts/lorena/Lorena.ttf);
		}; font-family:lorena; font-size: 1em;font-weight=5em; #000000;"><font  color="#fff" size="50em" style="letter-spacing:2px;" ><center>TEAM</center></font></h1>
		<hr/>
		<div class="container">
		<h2 style="@font-face {
		font-family:lorena;
		src:url(css/fonts/lorena/Lorena.ttf);
		}; font-family:lorena; font-size: 1em;font-weight=5em; #000000;"><font  color="#fff" size="50em" ><center>Student Co-ordinators</center></font></h2>
			<div class="team">
		<center>
		<table>
		<tr>
		<td>Aditya Vats	&nbsp; 	&nbsp; 	&nbsp;	&nbsp;	&nbsp;</td>
	
		<td>Suraj Mishra</td>
		</tr>
		</table>
		<table>
				<tr>
<td><a href="https://www.facebook.com/Mr.Serpentine?fref=ts" target="_blank"><img alt="fb" src="images/fb.png"></a></td>
				<td><a href="mailto:adii.vats@gmail.com" target="_blank"><img alt="mail" src="images/msg.png"></a></td>
				<td>8989923540</td>
				 <td>&nbsp;	&nbsp;	&nbsp;&nbsp;			&nbsp;	&nbsp;&nbsp;	&nbsp;	&nbsp;&nbsp;	</td>
<td><a href="https://www.facebook.com/suraj.avenger?fref=ts" target="_blank"><img alt="fb" src="images/fb.png"></a></td>
				<td><a href="mailto:surajiiitm@gmail.com" target="_blank"><img alt="mail" src="images/msg.png"></a></td>
                                 <td>8989923556</td>
				</tr>
				</table><br />
<table>
		<tr>
		<td>Ashutosh Yadav	&nbsp;   		</td>
	<td>Brajendra Yadav &nbsp;	</td>
		<td>Nikhil Saxena</td>

		</tr>
		</table>
		<table>
				<tr>

				
				<td>9425716467</td>
				 <td>&nbsp;	&nbsp;	&nbsp;	</td>

				
                                 <td>7415571516</td>
 <td>&nbsp;	&nbsp;	&nbsp;	</td>
			
                                 <td>9179250887</td>
				</tr>
				</table><br />
		</center>
				</div >
				<h2 style="@font-face {
				font-family:lorena;
				src:url(css/fonts/lorena/Lorena.ttf);
				}; font-family:lorena; font-size: 1em;font-weight=5em; #000000;"><font  color="#fff" size="50em" ><center>Event Management Team</center></font></h2>
				<div class="team">
		<center>
		<table>
		<tr>
		<td>Aakash Sharma	&nbsp;&nbsp; 	&nbsp; 	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;</td>
	
		<td>Adhikari Babu</td>
		</tr>
		</table>
		
		<table>
				<tr>
				
				<td><sub>8989923557</sub></td>
				 <td>&nbsp;&nbsp;	&nbsp;	&nbsp;&nbsp;&nbsp;	&nbsp;	&nbsp;&nbsp;	&nbsp;	&nbsp;&nbsp;	</td>
				<td>898931132</td>
				
		
				</tr>
				</table>
				<br />
				<table>
		<tr>
		<td>Ram Manohar &nbsp; 	&nbsp; 	&nbsp;	&nbsp;		&nbsp;	&nbsp;</td>
		
	
		<td>Paras Mishra</td>
		</tr>
		</table>
			<table>
				<tr>
				
				<td>9406505017</td>
				 <td>	&nbsp;	&nbsp;	&nbsp;&nbsp;	&nbsp;	&nbsp;&nbsp;&nbsp;	&nbsp;	&nbsp;&nbsp;	&nbsp;	&nbsp;&nbsp;	</td>
				<td>8989751014</td>
				
		
				</tr>
				</table>
				<table><br />
		<tr>

	<td>Chetna Meena	&nbsp;&nbsp;&nbsp; 	&nbsp; 	&nbsp;	&nbsp;	&nbsp;&nbsp;	&nbsp;	&nbsp;</td>
		<td>Shubhi Jain</td>
		</tr>
		</table>
			<table>
				<tr>
				
				<td>8435221202</td>
				 <td>&nbsp;	&nbsp;	&nbsp;&nbsp;	&nbsp;	&nbsp;&nbsp;	&nbsp;	&nbsp;		&nbsp;&nbsp;</td>
				<td>8109881578</a></td>
				
		
				</tr>
				</table>
		</table>
		
	
				</div ><br>
<h2 style="@font-face {
				font-family:lorena;
				src:url(css/fonts/lorena/Lorena.ttf);
				}; font-family:lorena; font-size: 1em;font-weight=5em; #000000;"><font  color="#fff" size="50em" ><center>Online Affairs</center></font></h2>
				<div class="team">
		<center>
		<table>
		<tr>
		<td>Pawan Meena</td>
	
		</tr>
		</table>
		<table>
				<tr>
				<td><a href="https://www.facebook.com/cHaOs.DrEaMeRz?fref=ts" target="_blank"><img alt="fb" src="images/fb.png"></a></td>
				<td><a href="mailto:pawanbalram@gmail.com" target="_blank"><img alt="mail" src="images/msg.png"></a></td>
				<td>8989923583
				</tr>
				</table>
		</center>
				</div ><br>
				
				<h2 style="@font-face {
				font-family:lorena;
				src:url(css/fonts/lorena/Lorena.ttf);
				}; font-family:lorena; font-size: 1em;font-weight=5em; #000000;"><font  color="#fff" size="50em" ><center>Web Credits</center></font></h2>
				<div class="team">
		<center>
		<table>
		<tr>
		<td>Udit Kumavat	&nbsp; 	&nbsp; 	&nbsp;	&nbsp;	&nbsp;</td>
	
		<td>Aakash Khandelwal</td>
		</tr>
		</table>
		<table>
				<tr>
				<td><a href="https://www.facebook.com/udit.kumawat" target="_blank"><img alt="fb" src="images/fb.png"></a></td>
				<td><a href="mailto:udit.kumawat@gmail.com" target="_blank"><img alt="mail" src="images/msg.png"></a></td>
				<td><a href="http://www.linkedin.com/in/uditkumawat94" target="_blank"><img alt="linkedin" src="images/in.png"></a> &nbsp;	&nbsp;	&nbsp;&nbsp;	&nbsp;	&nbsp;&nbsp;	&nbsp;	&nbsp;&nbsp;	&nbsp;	&nbsp;&nbsp;	</td>
				<td><a href="https://www.facebook.com/aakash.khandelwal.921" target="_blank"><img alt="fb" src="images/fb.png"></a></td>
				<td><a href="mailto:aakashkh284@gmail.com" target="_blank"><img alt="mail" src="images/msg.png"></a></td>
				<td><a href="http://www.linkedin.com/pub/aakash-khandelwal/7b/830/555" target="_blank"><img alt="linkedin" src="images/in.png"></a></td>
				</tr>
				</table>
		</center>
				</div ><br>
				
				
		</div>
	</div>
</div>
<!--seperator 4-->
<div class="section seperator3">
	<div class="inner">	
	<div id="matter">	
			<h1 style="@font-face {
			font-family:lorena;
			src:url(css/fonts/lorena/Lorena.ttf);
			}; font-family:lorena; font-size: 1em;font-weight=5em; #000000;"><font  color="white" size="50em" style="letter-spacing:2px;" ><center>Pronite-The Celebrity Night</center></b>
			Coming Soon</font></h1>
			</center>
			</div>
	</div>
</div>
<!--section s7 contact-->
<div class="section s7">
	<div class="inner">
		<br><hr />
		<h1 style="@font-face {
		font-family:lorena;
		src:url(css/fonts/lorena/Lorena.ttf);
		}; font-family:lorena; font-size: 1em;font-weight=5em; #ffffff;"><font  color="white" size="50em" style="letter-spacing:2px;" ><center>&nbsp;Contact Us<hr /></center></font></h1>
		
		<section class="container" id="contact" >
		<form class="flip">
			<div class="front">
				<h2>Contact info</h2>
				<p>AURORA 2K14</p>
				<p></p>
				<a id="flip2back" href="#s7">Click on me!</a>
			</div>
			<div id="content" class="back">
				<div id="letter">
					<div class="container">
						<div class="flip">
			  				<div class="front"></div>
			  				<div class="back">
								 <ul><li>Just Pen Down Your Views Regarding Site.</li><li> Regarding any Suggestions or Queries, Inbox us. </li><li>You'll hear back from us soon.</li><li>Ideas are Invited.</li></ul>
								 <center><h1 />Thanks for Visit.</h1></center> 
								<a id="close" href="#s7">Close</a>
							</div>
						</div>
					</div>
					<textarea  class="required" id="message" name="message" placeholder="Your message"></textarea>	
					<input type="submit" class="submit" value="Send" required="required"/>
				</div>
				<div id="top">
					<a id="flip" href="#contact">Flip</a>
				</div>
				<div id="lid" class="container">
  					<div class="flip">    
  						<div class="front">
							<div>
								<font color="red"><label for="name">Your name :</label></font>
								<input type="text"  id="name" name="name" required="required">
							</div>
							<a id="open" href="#content"><img alt="open" src="images/open.png" align="right" /></a>
							<div>
								<font color="red"><label for="mail">Your email :</label></font>
								<input type="text" id="mail" name="mail" required="required">
							</div>
						</div>
						<div class="back"></div>
					</div>
				</div>
			</div>
		</form>
	</section>
	</div>
</div>
<!--section s8 copyright-->
<div class="section s8">
		<div class="inner">
		<center><br><br><font color="white">Copyright © AURORA 2K14</font></center>
		</div>
	</div>
</div>



<script src="js/classie.js"></script>


<script src="js/modalEffects.js"></script>
<script>
			// this is important for IEs
			var polyfilter_scriptpath = '/js/';
</script>
<!--js-->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript" 	src="js/jquery.smint.js"></script>
<script src="js/modernizr.custom.js"></script>	
<script type="text/javascript">
$(document).ready( function() {
    $('.subMenu').smint({
    	'scrollSpeed' : 1000
    });
});
</script>

<!--to prevent scrolling-->
<script type="text/javascript">
$(window).keydown(function(event) 
{
    if((event.keyCode == 107 && event.ctrlKey == true) || (event.keyCode == 109 && event.ctrlKey == true) || (event.keyCode == 173 && event.ctrlKey == true) || (event.keyCode == 61 && event.ctrlKey == true))
    {
        event.preventDefault();		
    }
    $(window).bind('mousewheel DOMMouseScroll', function(event) 
    {
        if(event.ctrlKey == true)
        {
            event.preventDefault();			
        }
    });
});
</script>
<script type="application/javascript">
function eventLoad(event)
{
	document.getElementById("bodyy").style.overflow = "hidden";
   var data_file = "finalevents.json";
   var http_request = new XMLHttpRequest();
   try{
      // Opera 8.0+, Firefox, Chrome, Safari
      http_request = new XMLHttpRequest();
   }catch (e){
      // Internet Explorer Browsers
      try{
         http_request = new ActiveXObject("Msxml2.XMLHTTP");
      }catch (e) {
         try{
            http_request = new ActiveXObject("Microsoft.XMLHTTP");
         }catch (e){
            // Something went wrong
            alert("Your browser broke!");
            return false;
         }
      }
   }
   http_request.onreadystatechange  = function(){
      if (http_request.readyState == 4  )
      {
        var jsonArr = JSON.parse(http_request.responseText);
		for(var i=0;i<jsonArr.length;i++)
		{
			if(jsonArr[i].name==event)
			{
				document.getElementById("name").innerHTML=jsonArr[i].name;
				document.getElementById("tagline").innerHTML=jsonArr[i].tagline;
				document.getElementById("description").innerHTML=jsonArr[i].description;
			}
		}
		}
   }
   http_request.open("GET", data_file, true);
   http_request.send();
}

function clo(){
	document.getElementById("bodyy").style.overflowY = "scroll";
	document.getElementById("bodyy").style.overflowX="hidden";
}
</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-47685530-1', 'auroraiiitm.org');
  ga('send', 'pageview');

</script>
</body>
</html>
