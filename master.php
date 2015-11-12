<?php
session_start(); //starting session
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Quality Hat Shop</title>
    <link href="Content/bootstrap-theme.min.css" rel="stylesheet" type="text/css" />
    <link href="Content/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="Content/bootstrapValidator.min.css" rel="stylesheet" type="text/css" />
    <script src="Scripts/bootstrap.min.js" type="text/javascript"></script>
    <script src="Scripts/jquery-2.1.4.min.js" type="text/javascript"></script>
    <script src="Scripts/bootstrap.js" type="text/javascript"></script>
    <script src="Scripts/jquery-2.1.4-vsdoc.js" type="text/javascript"></script>
    <script src="Scripts/jquery-2.1.4.js" type="text/javascript"></script>
    <script src="Scripts/bootstrapValidator.min.js" type="text/javascript"></script>
    <style type="text/css">
        html
        {
            position: relative;
            min-height: 100%;
        }
        #header
        {
            height: 95px;
        }
        .footer
        {
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 55px;
            background-color: rgb(255,255,255);
        }
		@font-face { font-family: AndaleMono; src: url(Fonts/AndaleMono.ttf); } 
		body, h1, h2, h3, h4 {
			font-family: AndaleMono;
		}
    </style>
</head>
<body>
<!-- Navigation -->
<div id="header">
	<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="index.php?content_page=home" class="navbar-brand">
					<img src="Images/logo.png" alt="Quality Hat" height="20px" width="70px">
				</a>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li>
						<a href="index.php?content_page=home">Home</a>
					</li>
					<li>
						<a href="index.php?content_page=contact">Contact Us</a>
					</li>
				</ul>
				<!-- Right navigation bar -->
				<ul class="nav navbar-nav navbar-right">
					<li>
						<?php
							//checking if user is not authenticated
							if (!isset($_SESSION['flag']) || ($_SESSION['flag'] == false))
							{
								echo "<a href='index.php?content_page=login'>Login</a>";
							}
							else
							{
								echo "<a href='index.php?content_page=customerDetail'>Welcome <b>".$_SESSION['current_user']."</b></a>
								<li>
									<a href='index.php?content_page=userOrder'>Orders</a>
								</li>
								<li>
									<a href='logout.php'>Logout</a>
								</li>";	
							}
						?>
					</li>
					<li>
                    	<?php
							//checking if user is not authenticated
							if (!isset($_SESSION['flag']) || ($_SESSION['flag'] == false))
							{
								echo "<a href='index.php?content_page=register'>Register</a>";
							}
						?>
					</li>
					<li>
						<a href="index.php?content_page=shoppingcart">
							<img src="Images/shoppingcart.png" alt="Quality Hat" height="20px" width="20px">
						</a>
					</li>
				</ul>
			</div>
			<!-- /.navbar-collapse -->
		</div>
	<!-- /.container -->
	</nav>
</div>

<!-- Page Content -->
<div class="container">
	<div class="row">
		<div class="col-md-3">
			<div class="list-group">
				<a href="index.php?content_page=vintage" class="list-group-item">Vintage</a>
				<a href="index.php?content_page=knit" class="list-group-item">Knit & Bear</a>
				<a href="index.php?content_page=trucker" class="list-group-item">Trucker</a>
				<a href="index.php?content_page=leather" class="list-group-item">Leather</a>
				<a href="index.php?content_page=ladies" class="list-group-item">Ladies</a>
			</div>
		</div>
		<div class="col-md-9">
			<?php include($page_content);?>
            <br/>
            <br/>
            <br/>
		</div>
	</div>
</div>

<!-- Footer -->
<div class="footer">
	<div class="container">
		<p class="text-muted" align="center">
			Copyright &copy; Di Zhang. Hat information comes from
			<a href="http://www.newyorkhatco.com/">NewYorkHatCo</a>
		</p>
	</div>
</div>

</body>
</html>