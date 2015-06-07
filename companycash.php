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
<style> @font-face {
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
    .navbar-nav>li>a {
        padding-top: 50px;
        padding-bottom: 50px;
    }
</style>
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
	<section>
		<div class="container">
			<div class="row">

				
				<div class="col-sm-9 padding-right">
                    <?php

                    require_once './php_cps_api/cps_simple.php';
                    require_once './php_cps_api/cps_api.php';
                    $connectionStrings = array(
                        'tcp://cloud-eu-0.clusterpoint.com:9007',
                        'tcp://cloud-eu-1.clusterpoint.com:9007',
                        'tcp://cloud-eu-2.clusterpoint.com:9007',
                        'tcp://cloud-eu-3.clusterpoint.com:9007',
                    );
                    $cpsConn = new CPS_Connection(new CPS_LoadBalancer($connectionStrings), 'companydetails', 'jacobjmattam@praudyogiki.com', 'geeks@work4u', 'document', '//document/id', array('account' => 910));
                    //$cpsConn->setDebug(true);
                    $cpsSimple = new CPS_Simple($cpsConn);
                    $query = $_GET['id'];
                    $documents = $cpsSimple->search($query);

                    foreach ($documents as  $document) {

                            ?>
					<div class="product-details"><!--product-details-->
						<div class="col-sm-4">
							<div class="view-product">
								<img src="images/s1.PNG" alt="" />

							</div>

						</div>
						<div class="col-sm-5">
							<div class="product-information"><!--/product-information-->
								<h2><?php echo $document->brand_name ?></h2>
								<p>Description: <?php echo $document->brand_des ?></p>
								<span>
									<span>Upto Rs.<?php echo $document->sponsorship_amount?></span>


								</span>
								<p><b>Sponsorship Type:</b> <?php echo $document->sponsorship_type?></p>

							</div>
						</div>

                        <div class="col-sm-3">
<h3>Things to Do</h3>
                            <ul>
<li>FB Share</li>
<li> Follow on FB</li>
<li>Instagram</li>
<li>Watch An Advertisement</li>

<ul>
                        </div>
					</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</section>


<footer id="footer" style="margin-top: 12%">
    <div class="container">
        <div class="row">
            <p class="pull-left" style="margin: 10px">Daddyspocket.com</p>
        </div>
    </div>

</footer>

<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/price-range.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.prettyPhoto.js"></script>
<script src="js/main.js"></script>
</body>
</html>