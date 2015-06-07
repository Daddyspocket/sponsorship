<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <script src="js/jquery-1.10.2.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
    <link href="css/bootstrap-theme.css" rel="stylesheet" type="text/css"/>
    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <script src="js/jquery.noty.packaged.min.js"></script>
    <script src="js/jquery.fadethis.js"></script>


    <style>
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
        .labeldate
        {
            color: #919191;
            font-weight: 600;
        }
        .calendar
        {
            width: 90%;
            height: 200px;
        }
        .labelcus
        {
            color: #919191;
            font-weight: 400;
        }
        #cusdetails>.row,#cusdetailscon>.row
        {
            margin-top: 10px;
        }
        .cuscus
        {
            color:#3BAAF9;
            font-weight: 400;
        }
        .newleadButtons
        {
            width: 90%;
            background: #78A8FD;
            color:white;
            box-shadow: 2px 3px 3px #B4B9BF;
            padding: 6px 6px 6px 6px;
            border-radius: 4px;
            font-weight: 600;
        }
        .select-style {
            border: 1px solid #ccc;

            border-radius: 3px;
            overflow: hidden;

        }
        label {
            color: #919191;

        }
        .btn-file input[type=file] {
            position: absolute;
            top: 0;
            right: 0;
            min-width: 100%;
            min-height: 100%;
            font-size: 100px;
            text-align: right;
            filter: alpha(opacity=0);
            opacity: 0;
            outline: none;
            background: white;
            cursor: inherit;
            display: block;
        }
        .navbar-nav>li>a {
            padding-top: 50px;
            padding-bottom: 50px;
        }
    </style>

</head>

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

<div class="container-fluid">

    <div class="row">
        <div class="col-sm-7 col-xs-7">

           <h1 style="font-family: freehand;padding-top: 200px;padding-left: 70px "> Connect with Brands<br>
            Looking to Sponsor Your Events</h1>
</div>
        <div class="col-sm-4 col-xs-4">
<h2 style="color:#919191 !important;">Register</h2>
            <br>
    <form id="form-signup" method="post">
        <div class="form-group">
       <label for="bname">Brand Name</label>
        <input type="text" id="bname" class="form-control" name="brand_name"></div>

        <div class="form-group">
            <label for="bd">Brand Description</label>

<textarea id="bd" class="form-control" name="brand_des"></textarea>        </div>
        <div class="form-group">
            <label for="stype">Sponsorship Type</label>
            <select id="stype" class="form-control" name="sponsorship_type">
                <option value="custom">Customised Merchandise</option>
                <option value="cash">Cash</option>

            </select></div>

        <div class="form-group">
            <label for="samount">Sponsorship Amount</label>
            <input type="text" id="samount" class="form-control" name="sponsorship_amount"></div>
        <div class="form-group">
            <label for="fb">Facebook Link</label>
            <input type="text" id="fb" class="form-control" name="fb"></div>
        <div class="form-group">
        <label for="twt">Twitter Link</label>
        <input type="text" id="twt" class="form-control" name="tw"></div>

        <div class="form-group">
        <label for="email">Email</label>
        <input type="text" id="email" class="form-control"></div>
        <div class="form-group">
            <label for="pass">Password</label>
            <input type="password" id="pass" class="form-control" name="password"></div>



        <div class="form-group">
            <input type="button" class="btn btn-primary btn-block" id="submit_btn" value="Save" id="btn-3">
        </div>
    </form>
        </div>
        <div class="col-sm-1 col-xs-1">
        </div>
        </div></div>
</body>
<script type="text/javascript">
    $(document).ready(function() {
        $("#submit_btn").click(function() {



                post_data = {
                    'brand_name'     : $('input[id=bname]').val(),
                    'brand_des'      : $('textarea[id=bd]').val(),
                    'user_email'    : $('input[id=email]').val(),
                    'password'  : $('input[id=pass]').val(),
                    'sponsorship_amount'  : $('input[id=samount]').val(),
                    'sponsorship_type'       : $('select[id=stype]').val(),
                    'fb'       : $('input[id=fb]').val(),
                    'twt'           : $('input[id=twt]').val()
                };

                $.post('company.php', post_data, function(response){
                    if(response== 200){
                        noty({text: 'Company Profile successfully created', type: 'success',layout: 'bottom', timeout:2000,
                            dismissQueue: false});
                        document.getElementById("form-signup").reset();
                    }else{
                        noty({text: 'Please try again', type: 'warning',layout: 'bottom', timeout:2000,
                            dismissQueue: false});
                        document.getElementById("form-signup").reset();

                    }
                }, 'json');

                    });


    });

</script>
</html>