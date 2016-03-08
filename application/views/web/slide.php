<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Demo: Boxed Thumbnails - Bootstrap Carousel</title>
<meta name="description" content="Boxed Thumbnails - Bootstrap Carousel - Collection by sevenXdemo - More Information: www.sevenX.de/blog" />
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">


<style>
body { padding-top: 50px; }
/*#####################
Additional Styles (required)
######################*/
#myCarousel .thumbnail {
	margin-bottom: 0;
}
.carousel-control.left, .carousel-control.right {
	background-image:none !important;
}
.carousel-control {
	color:#fff;
	top:40%;
	color:#428BCA;
	bottom:auto;
	padding-top:4px;
	width:30px;
	height:30px;
	text-shadow:none;
	opacity:1;
}
.carousel-control:hover {
	color: #d9534f;
}
.carousel-control.left, .carousel-control.right {
	background-image:none !important;
}
.carousel-control.right {
	left:auto;
	right:-32px;
}
.carousel-control.left {
	right:auto;
	left:-32px;
}
.carousel-indicators {
	bottom:-30px;
}
.carousel-indicators li {
	border-radius:0;
	width:10px;
	height:10px;
	background:#ccc;
	border:1px solid #ccc;
}
.carousel-indicators .active {
	width:12px;
	height:12px;
	background:#3276b1;
	border-color:#3276b1;
}
</style>

</head>

<body>
<div class="container">
<h1>Upcoming Event</h1>
<br>
<br>
	<div class="row" id="event">
			<div class="well">
            <!-- Carousel
            ================================================== -->            
            <div id="myCarouselku" class="carousel slide">
                <div class="carousel-inner">
				<?php
				$f=0;
				for($i=0;$i<count($event);$i++){
                    If($i==($f+3)) {
					echo"<div class=\"item active\">
					
                        <div class=\"row\">";
					}
						
                            echo"<div class=\"col-md-3\"><a href=\"#\" class=\"thumbnail\"><img class=\"img-responsive\" src=\"".$event[$i]->gambar."\" alt=\"".$event[$i]->judul."\"></a>
                            <div class=\"caption\">
                            <h3>".$event[$i]->judul."</h3>   
                            </div>
							
                            </div>";
						}
                            
							
                       echo"</div>" ;
                    echo"</div>";
                ?>    
                  
                </div>
                <a class="left carousel-control" href="#myCarousel" data-slide="prev"><i class="fa fa-chevron-left fa-2x"></i></a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next"><i class="fa fa-chevron-right fa-2x"></i></a>
                
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>                
            </div><!-- End Carousel --> 
        </div><!-- End Well -->
    </div>
</div>
<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script>
	$('#myCarouselku').carousel({
		interval:   4000
	});
</script>
</body>
</html>