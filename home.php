<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Quality Hat Shop</title>
    <link rel="stylesheet" type="text/css" href="Content/bootstrap.min.css">
    <script src="Scripts/bootstrap.min.js" type="text/javascript"></script>
	<style>
        .carousel-inner > .item > img, .carousel-inner > .item > a > img
        {
            width: 100%;
            margin: auto;
        }
		@font-face { font-family: AndaleMono; src: url(Fonts/AndaleMono.ttf); } 
		body, h1, h2, h3 {
			font-family: AndaleMono;
		}
    </style>
</head>

<body>
	<!-- Banner -->
    <div style="text-align: center">
        <img src="Images/banner.gif" style="text-align:center" />
        <br />
        <br />
    </div>
	<!-- Slide Show -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="Images/Carousel_1.jpg">
            </div>
            <div class="item">
                <img src="Images/Carousel_2.jpg">
            </div>
            <div class="item">
                <img src="Images/Carousel_3.jpg">
            </div>
            <div class="item">
                <img src="Images/Carousel_4.jpg">
            </div>
        </div>
        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"></a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"></a>
    </div>
</body>
</html>
