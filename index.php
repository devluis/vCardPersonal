<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Personal Business Card</title>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<!-- Link to Reset Style Sheet -->
<link href="css/reset.css" type="text/css" rel="stylesheet" />
<!-- Link to Main Style Sheet -->
<link href="css/style.css" type="text/css" rel="stylesheet" />
<!-- Link to Tooltip Style Sheet -->
<link href="css/vtip.css" type="text/css" rel="stylesheet" />
<!-- Link to Lightbox Gallery Style Sheet -->
<link href="css/prettyPhoto.css" type="text/css" rel="stylesheet" />

<!-- Link to the jQuery Library -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js" type="text/javascript"></script>

<!--//////////////-->
<!-- FIXES FOR IE -->
<!--//////////////--> 

    <!--[if lt IE 7]>
    <link href="css/iefixes.css" rel="stylesheet" type="text/css" />
    <script src="js/DD_belatedPNG_0.0.8a.js" type="text/javascript"></script>
    <script type="text/javascript">DD_belatedPNG.fix('img, #wrapper, #header, ul.navigation, ul.navigation li a.selected, #datacontent .panels, .content ul, 								#bottom');</script>
    <![endif]-->

<!--///////////////////////-->
<!-- jQuery tooltip plugin -->
<!--///////////////////////--> 

	<script src="js/vtip.js" type="text/javascript"></script>

<!--///////////////////////////////-->
<!--  PRETTYPHOTO LIGHTBOX GALLERY -->
<!--///////////////////////////////-->

	<script src="js/jquery.prettyPhoto.js" type="text/javascript"></script>
    
    <script type="text/javascript">
    $(document).ready(function(){
        $("a[rel^='prettyPhoto']").prettyPhoto({
                    animationSpeed: 'normal', /* fast/slow/normal */
                    padding: 40, /* padding for each side of the picture */
                    opacity: 0.75, /* Value betwee 0 and 1 */
                    showTitle: true, /* true/false */
                    counter_separator_label: '/', /* The separator for the gallery counter 1 "of" 2 */
                    theme: 'light_rounded' /* light_rounded / dark_rounded / light_square / dark_square */
                });
    });
    </script>

</head>
<body>
<div id="wrapper"><!-- Start Wrapper DIV -->
  <div id="datacontent"><!-- Start Datacontent DIV -->
  
	<div id="header"><!-- Start Header DIV -->
    	<div id="avatar" class="vtip"><!-- Start Avatar DIV -->
       	 <a href="#"><img src="img/avatar.png" alt="Avatar" /></a><!-- Your Avatar Goes here -->
        </div><!-- End Avatar DIV -->
        <div id="name"><!-- Start Name DIV -->
        	<h1>Luis Hernández.</h1><br /><!-- Your Name Goes Here -->
            <h3>Desarrollador web y Diseñador</h3><!-- What You Do (Your Profession) Goes Here -->
        </div><!-- End Name DIV -->
    </div><!-- End Header DIV -->  
  
    <ul class="navigation"><!-- Start Navigation UL -->
      <li><a href="#about">Acerca de mí</a></li>
      <li><a href="#social">Social</a></li>
      <li><a href="#work">Trabajo</a></li>
      <li><a href="#contact">Contacto</a></li>
    </ul><!-- End Navigation UL -->
    
    <div class="panels"><!-- Start Panels DIV -->
      <div id="about" class="panel"><!-- Start First Panel DIV // ABOUT PAGE -->
        <div class="content">
            <h2>Acerca de mí</h2>
            <p>Soy programador web, vivo en el Estado de méxico. Me gusta mucho diseñar y desarrollar aplicaciones web, me gusta construir cosas con madera en mi tiempo libre.</p>
        </div>
      </div><!-- End First Panel DIV // ABOUT PAGE -->
      <div id="social" class="panel"><!-- Start Second Panel DIV // SOCIAL NETWORKS PAGE -->
		<ul id="networks">
			<li class="first">
				<div class="icon">	
					<img src="img/twitter.png" alt="Twitter" />
				</div> 
				<div class="network"> 
					<a href="#">
                    <span>Twitter</span><br />
                    www.twitter.com/devluis
					</a>  
				</div>  
			</li>
			<li>
				<div class="icon">
                     <img src="img/facebook.png" alt="Facebook" />
				</div>
				<div class="network">  
					<a href="#">
                    <span>Facebook</span><br />
                    www.facebook.com/devluis
                    </a>
				</div> 
			</li>
			<li>
				<div class="icon">
					<img src="img/youtube.png" alt="YouTube" />
				</div>
				<div class="network"> 
					<a href="">
					<span>YouTube</span><br />
					www.youtube.com/
					</a>
				</div>
			</li>
			<li>
				<div class="icon">
                    <img src="img/delicious.png" alt="Delicious" />
				</div>
				<div class="network"> 
                    <a href="#">
                    <span>Delicious</span><br />
                    www.delicious.com
                    </a>
				</div>
			</li>
			<li class="last">
				<div class="icon">
                    <img src="img/myspace.png" alt="Myspace" />
				</div>
                    <div class="network"> 
                    <a href="#"><span>Myspace</span><br />
					www.myspace.com
					</a>
				</div>
			</li>
		</ul>
      </div><!-- End Second Panel DIV // SOCIAL NETWORKS PAGE -->
      <div id="work" class="panel"><!-- Start Third Panel DIV // WORK PAGE -->
        <div class="content">
        	<h2>Trabajo</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.</p>
            
              <ul id="portfolio">
                  <li><a href="img/portfolio/image1.jpg" rel="prettyPhoto[gallery]" title="You can add captions to the images"><img src="img/portfolio/tn_image1.jpg" alt="This is the title" /></a></li>
                  <li><a href="img/portfolio/image2.jpg" rel="prettyPhoto[gallery]" title="You can add captions to the images"><img src="img/portfolio/tn_image2.jpg" alt="This is the title" /></a></li>
                  <li><a href="img/portfolio/image3.jpg" rel="prettyPhoto[gallery]" title="You can add captions to the images"><img src="img/portfolio/tn_image3.jpg" alt="This is the title" /></a></li>
                  <li><a href="img/portfolio/image4.jpg" rel="prettyPhoto[gallery]" title="You can add captions to the images"><img src="img/portfolio/tn_image4.jpg" alt="This is the title" /></a></li>
                  <li><a href="img/portfolio/image5.jpg" rel="prettyPhoto[gallery]" title="You can add captions to the images"><img src="img/portfolio/tn_image5.jpg" alt="This is the title" /></a></li>
                  <li><a href="img/portfolio/image6.jpg" rel="prettyPhoto[gallery]" title="You can add captions to the images"><img src="img/portfolio/tn_image6.jpg" alt="This is the title" /></a></li>
                  <li><a href="img/portfolio/image7.jpg" rel="prettyPhoto[gallery]" title="You can add captions to the images"><img src="img/portfolio/tn_image7.jpg" alt="This is the title" /></a></li>
                  <li><a href="img/portfolio/image8.jpg" rel="prettyPhoto[gallery]" title="You can add captions to the images"><img src="img/portfolio/tn_image8.jpg" alt="This is the title" /></a></li>
              </ul>
        </div>    
      </div><!-- End Third Panel DIV // WORK PAGE -->
      <div id="contact" class="panel"><!-- Start Fourth Panel DIV // CONTACT PAGE -->
      	<div class="content">
          <h2>Contacto</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
         <ul id="contact_info"> 
              <li>
              <img src="img/phone.png" width="16" height="16" alt="Phone" /><span>04665 891 378</span>
              </li>
              <li>
              <img src="img/email.png" width="16" height="16" alt="E-mail" /><span><a href="#">lhernandez@developer-luis-hernandez.com</a></span>
              </li>
              <li>
              <img src="img/web.png" width="16" height="16" alt="Web" /><span><a href="#">www.developer-luis-hernandez.com</a></span>
              </li>
        </ul>   
        </div>  
      </div><!-- End Fourth Panel DIV // CONTACT PAGE -->
	</div><!-- End Panels DIV -->
    
    <div id="bottom"></div><!-- Bottom DIV -->
    
    <div id="copyright">&copy; 2012 Developer Luis Hernández- All rights reserved.</div><!-- Copyright Notice -->
        
  </div><!-- End Datacontent DIV --> 
</div><!-- End Wrapper DIV -->

<!-- //////////  HIDE/SHOW INIT SCRIPT -->
<script src="js/init.js" type="text/javascript"></script>

<!-- ///// GOOGLE ANALYTICS -->
</body>
</html>