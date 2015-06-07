<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Sponsors</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">

<body>
<div class="row" style="background: black;height:55px;padding: 10px">
    <div class="col-md-6 col-xs-0"></div>
    <div class="col-md-2 col-xs-4">
        <a href="user.php" class="btn btn-default">Sponsor an Event</a>    </div>
    <div class="col-md-2 col-xs-4">    <a href="listing.php" class="btn btn-default" style="width: 70%">Raise Funds</a></div>
    <div class="col-md-2 col-xs-4">
        <a href="#" class="btn btn-default"  style="width: 70%">Login</a>
    </div>
</div>
<nav class="navbar navbar-default navbar-static-top" style="height: 120px !important;">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#" style="font-family: freehand; font-size: 40px;color:#155092"><img src="logo.png"> Daddyspocket</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav" style="font-family: Arial;">
                <li class="active"><a href="#">Home</a></li>

                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact Us</a></li>

            </ul>

        </div><!--/.nav-collapse -->
    </div>
</nav>

	<br>
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Type</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->


							

							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Cash</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Merchandise</a></h4>
								</div>
							</div>

						</div><!--/category-productsr-->
					
						<div class="brands_products"><!--brands_products-->
							<h2>Event Type</h2>
							<div class="brands-name">
								<ul class="nav nav-pills nav-stacked">
									<li><a href=""> <span class="pull-right"></span>Tech Fest</a></li>
									<li><a href=""> <span class="pull-right"></span>Management Fest</a></li>
									<li><a href=""> <span class="pull-right"></span>CulturalEvent</a></li>
									<li><a href=""> <span class="pull-right"></span>Sports</a></li>

								</ul>
							</div>
						</div><!--/brands_products-->
						
						<div class="price-range"><!--price-range-->
							<h2>Price Range</h2>
							<div class="well">
								 <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="60000" data-slider-step="10000" data-slider-value="[2000,40000]" id="sl2" ><br />
								 <b>Rs 0</b> <b class="pull-right">Rs 600000</b>
							</div>
						</div>

						</div>
				</div>
              <?php
              require_once 'db.php';
              $query = '*';
              $documents = $cpsSimple->search($query);

              ?>
				<div class="col-sm-9 padding-right">
					<div class="features_items">
						<h2 class="title text-center">Sponsors</h2>
                        <?php
foreach ($documents as  $document) {

?>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="images/s1.PNG" alt="" />
										<h2>Upto Rs.<?php echo $document->sponsorship_amount?></h2>
										<p><?php echo $document->brand_name ?></p>
										<a href="#" class="btn btn-default add-to-cart"><i class="glyphicon glyphicon-search"></i>View More</a>
									</div>
									<div class="product-overlay">
										<div class="overlay-content">
											<h2>Upto Rs.<?php echo $document->sponsorship_amount?></h2>
											<p><?php echo $document->brand_name ?></p>
											<a href="companyprofile.php?id=<?php echo $document->brand_name ?>" class="btn btn-default add-to-cart"><i class="glyphicon glyphicon-search"></i>View More</a>
										</div>
									</div>
								</div>

							</div>
						</div>
<?php } ?>

					</div>
				</div>
			</div>
		</div>
	</section>
	
	<footer id="footer">
			<div class="container">
				<div class="row">
					<p class="pull-left" style="margin: 10px">Daddyspocket.com</p>
				</div>
			</div>

	</footer>
	<style> .navbar-nav>li>a {
            padding-top: 50px;
            padding-bottom: 50px;
        }
@font-face {
            font-family: gothic;
            src: url(fonts/FRABKIT_0.TTF);
        }
        @font-face {
            font-family: freehand;
            src: url(fonts/FREESCPT_0.TTF);
        }
        @font-face {
            font-family: freestyle;
            src: url(fonts/FREESCPT_0.TTF);
        }
        @font-face {
            font-family: corbeli;
            src: url(fonts/CORBELI_0.TTF);
        }
        @font-face {
            font-family: dawn;
            src: url(fonts/DAUNPENH_0.TTF);
        }
</style>
    <script src="js/jquery-1.10.2.min.js"></script>
	<script src="js/price-range.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>