<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html ng-app="myApp">
<head>
<title>Tangan Kita</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Roboto:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/move-top.js"></script>

					<script type="text/javascript" src="js/easing.js"></script>
					<script type="text/javascript">
				var $= jQuery.noConflict();
					$(document).ready(function($) {
						$(".scroll").click(function(event){		
							event.preventDefault();
							$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
						});
					});
					</script>
<!-- Add fancyBox main JS and CSS files -->
		<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
		<link href="css/magnific-popup.css" rel="stylesheet" type="text/css">
		<script>
		var $ = jQuery.noConflict();
			$(document).ready(function($) {
				$('.popup-with-zoom-anim').magnificPopup({
					type: 'inline',
					fixedContentPos: false,
					fixedBgPos: true,
					overflowY: 'auto',
					closeBtnInside: true,
					preloader: false,
					midClick: true,
					removalDelay: 300,
					mainClass: 'my-mfp-zoom-in'
			});
		});
		</script>
</head>
<body>

 <div class="header">
  <div class="header-top">	
	<div class="container">
   		<div class="logo">
			<a href="#"><img src="images/logo.png" alt=""/></a>
		</div>	
		<div class="menu">																
			<a href="#" class="right_bt" id="activator"><img src="images/nav.png" alt=""/></a>
				<div class="box" id="box">
				   <div class="box_content_center">
					   <div class="menu_box_list">
						   <ul>
							   <li><a href="#home" class="scroll">Home</a></li>
							   <li class="active"><a href="#about" class="scroll">About</a></li> 
							   <li><a href="#article" class="scroll">Article</a></li> 
							   <li><a href="#team" class="scroll">OUR TEAM</a></li>
							   <li><a href="#event" class="scroll">Upcoming Event</a></li>
							
							</ul>
						</div>
						<a class="boxclose" id="boxclose"><img src="images/close.png" alt=""/></a>
						<script type="text/javascript" src="js/easing.js"></script>
					     <script type="text/javascript">
								var $ = jQuery.noConflict();
									$(document).ready(function() {
										$('#activator').click(function(){
												$('#box').animate({'top':'0px'},500);
										});
										$('#boxclose').click(function(){
												$('#box').animate({'top':'-700px'},500);
										});
									});
									$(document).ready(function($){
									
									//Hide (Collapse) the toggle containers on load
									$(".toggle_container").hide($); 
									
									//Switch the "Open" and "Close" state per click then slide up/down (depending on open/close state)
									$(".trigger").click(function($){
										$(this).toggleClass("active").next().slideToggle("slow");
										return false; //Prevent the browser jump to the link anchor
									});
									
									});
								</script>
								
					  </div>                
					</div>
					
				</div> 	
				
			</div>	
		</div>	
	    	 <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="js/jssor.slider.mini.js"></script>
    <!-- use jssor.slider.debug.js instead for debug -->
    <script>
        jQuery(document).ready(function ($) {
            
            var jssor_1_SlideoTransitions = [
              [{b:5500,d:3000,o:-1,r:240,e:{r:2}}],
              [{b:-1,d:1,o:-1,c:{x:51.0,t:-51.0}},{b:0,d:1000,o:1,c:{x:-51.0,t:51.0},e:{o:7,c:{x:7,t:7}}}],
              [{b:-1,d:1,o:-1,sX:9,sY:9},{b:1000,d:1000,o:1,sX:-9,sY:-9,e:{sX:2,sY:2}}],
              [{b:-1,d:1,o:-1,r:-180,sX:9,sY:9},{b:2000,d:1000,o:1,r:180,sX:-9,sY:-9,e:{r:2,sX:2,sY:2}}],
              [{b:-1,d:1,o:-1},{b:3000,d:2000,y:180,o:1,e:{y:16}}],
              [{b:-1,d:1,o:-1,r:-150},{b:7500,d:1600,o:1,r:150,e:{r:3}}],
              [{b:10000,d:2000,x:-379,e:{x:7}}],
              [{b:10000,d:2000,x:-379,e:{x:7}}],
              [{b:-1,d:1,o:-1,r:288,sX:9,sY:9},{b:9100,d:900,x:-1400,y:-660,o:1,r:-288,sX:-9,sY:-9,e:{r:6}},{b:10000,d:1600,x:-200,o:-1,e:{x:16}}]
            ];
            
            var jssor_1_options = {
              $AutoPlay: true,
              $SlideDuration: 800,
              $SlideEasing: $Jease$.$OutQuint,
              $CaptionSliderOptions: {
                $Class: $JssorCaptionSlideo$,
                $Transitions: jssor_1_SlideoTransitions
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };
            
            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
            
            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizing
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 1920);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            //responsive code end
        });
    </script>

    <style>
        
        /* jssor slider bullet navigator skin 05 css */
        /*
        .jssorb05 div           (normal)
        .jssorb05 div:hover     (normal mouseover)
        .jssorb05 .av           (active)
        .jssorb05 .av:hover     (active mouseover)
        .jssorb05 .dn           (mousedown)
        */
        .jssorb05 {
            position: absolute;
        }
        .jssorb05 div, .jssorb05 div:hover, .jssorb05 .av {
            position: absolute;
            /* size of bullet elment */
            width: 16px;
            height: 16px;
            background: url('img/b05.png') no-repeat;
            overflow: hidden;
            cursor: pointer;
        }
        .jssorb05 div { background-position: -7px -7px; }
        .jssorb05 div:hover, .jssorb05 .av:hover { background-position: -37px -7px; }
        .jssorb05 .av { background-position: -67px -7px; }
        .jssorb05 .dn, .jssorb05 .dn:hover { background-position: -97px -7px; }

        /* jssor slider arrow navigator skin 22 css */
        /*
        .jssora22l                  (normal)
        .jssora22r                  (normal)
        .jssora22l:hover            (normal mouseover)
        .jssora22r:hover            (normal mouseover)
        .jssora22l.jssora22ldn      (mousedown)
        .jssora22r.jssora22rdn      (mousedown)
        */
        .jssora22l, .jssora22r {
            display: block;
            position: absolute;
            /* size of arrow element */
            width: 40px;
            height: 58px;
            cursor: pointer;
            background: url('img/a22.png') center center no-repeat;
            overflow: hidden;
        }
        .jssora22l { background-position: -10px -31px; }
        .jssora22r { background-position: -70px -31px; }
        .jssora22l:hover { background-position: -130px -31px; }
        .jssora22r:hover { background-position: -190px -31px; }
        .jssora22l.jssora22ldn { background-position: -250px -31px; }
        .jssora22r.jssora22rdn { background-position: -310px -31px; }
    </style>


    <div id="jssor_1" ng-controller="slider" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 1300px; height: 500px; overflow: hidden; visibility: hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
            <div style="position:absolute;display:block;background:url('img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
        </div>
        <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 1300px; height: 500px; overflow: hidden;">
            <?php
			for($i=0;$i<count($raw_data);$i++){
			echo"<div data-p=\"225.00\" style=\"display: none;\" >
                <img data-u=\"image\" src=\"".$raw_data[$i]->gambar."\" alt=\"".$raw_data[$i]->alt."\" />
            </div>";
			}
			?>
            <div data-p="225.00" style="display: none;">
                <img data-u="image" src="slider/blue.jpg" />
            </div>
			
        </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb05" style="bottom:16px;right:16px;" data-autocenter="1">
            <!-- bullet navigator item prototype -->
            <div data-u="prototype" style="width:16px;height:16px;"></div>
        </div>
        <!-- Arrow Navigator -->
        <span data-u="arrowleft" class="jssora22l" style="top:0px;left:12px;width:40px;height:58px;" data-autocenter="2"></span>
        <span data-u="arrowright" class="jssora22r" style="top:0px;right:12px;width:40px;height:58px;" data-autocenter="2"></span>
        <a href="http://www.jssor.com" style="display:none">Slideshow Maker</a>
    </div>

           	      
   	   </div>    
   	   <div class="main">
   	   	 <div class="content_top" id="about">
   	   	 	<div class="container">
   	   	 		<h4>About Us</h4>
	               	  <p>dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum</p>
   	   	 <?php include "slide.php" ?>
   	   	 </div>
   	   	 </div>
   	   	 </div><div class="team" id="team">
   	 	<div class="container">
   	 		<div class="service_top">
   	   				<h3>Meet The Team</h3>
   	   				<p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica</p>
   	   			</div>
   	   			<div class="team_grids text-center">
   	   				<div class="col-md-4 team_grid">
   	   				  <div class="view view-fifth"><a href="#">
	                    <img src="images/t1.jpg" class="img-responsive" alt=""/>
	                    <div class="mask">
	                       <div class="content">
	                         <a class="popup-with-zoom-anim" href="#small-dialog3"> <div class="info"><img src="images/plus.png" alt=""/></div></a>
			               </div> 
	                     </div>
	                         <div id="small-dialog3" class="mfp-hide">
								   <div class="pop_up2">
								   	   <h3>Lorem Ipsum</h3>
									   <h4>Senior UI Designer</h4>
									   <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis.</p>
								   </div>
							 </div>
	                     </a></div>
	                     <h4><a href="#"> Nam liber </a><br><span class="ceo">CEO</span></h4>
	                     <p>velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum</p>
   	   				   </div>
   	   				   <div class="col-md-4 team_grid">
   	   				  <div class="view view-fifth"><a href="#">
	                    <img src="images/t2.jpg" class="img-responsive" alt=""/>
	                    <div class="mask">
	                       <div class="content">
	                         <a class="popup-with-zoom-anim" href="#small-dialog3"> <div class="info"><img src="images/plus.png" alt=""/></div></a>
			               </div> 
	                     </div>
	                         <div id="small-dialog3" class="mfp-hide">
								   <div class="pop_up2">
								   	   <h3>Lorem Ipsum</h3>
									   <h4>Senior UI Designer</h4>
									   <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis.</p>
								   </div>
							 </div>
	                     </a></div>
	                     <h4><a href="#"> Nam liber </a><br><span class="ceo">Graphic Designer</span></h4>
	                     <p>velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum</p>
   	   				   </div>
   	   				  <div class="col-md-4 team_grid">
   	   				  <div class="view view-fifth"><a href="#">
	                    <img src="images/t3.jpg" class="img-responsive" alt=""/>
	                    <div class="mask">
	                       <div class="content">
	                         <a class="popup-with-zoom-anim" href="#small-dialog3"> <div class="info"><img src="images/plus.png" alt=""/></div></a>
			               </div> 
	                     </div>
	                         <div id="small-dialog3" class="mfp-hide">
								   <div class="pop_up2">
								   	   <h3>Lorem Ipsum</h3>
									   <h4>Senior UI Designer</h4>
									   <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis.</p>
								   </div>
							 </div>
	                     </a></div>
	                     <h4><a href="#"> Nam liber </a><br><span class="ceo">Lead Developer</span></h4>
	                     <p>velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum</p>
   	   				   </div>
   	   				   <div class="clearfix"></div>
   	   			</div>
   	   		  </div>
   	   		</div>
   	   	<?php include "s_articel.php" ?>
   	   	<?php include "footer.php" ?> 
</body>
</html>		