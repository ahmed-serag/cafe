<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Remas Cafe-Restaurant</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="<?php echo base_url(); ?>assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Paper Dashboard core CSS    -->
    <link href="<?php echo base_url(); ?>assets/css/paper-dashboard.css" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="<?php echo base_url(); ?>assets/css/demo.css" rel="stylesheet" />


    <!--  Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="<?php echo base_url(); ?>assets/css/themify-icons.css" rel="stylesheet">

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-background-color="white" data-active-color="danger">
    	<div class="sidebar-wrapper">
            <div class="logo">
                <a class="simple-text">
                    Remas Cafe-REStaurant
                </a>
            </div>
    	</div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>
                    <a class="navbar-brand" href="#">Tables</a>
                </div>
            </div>
        </nav>


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <?php
                    foreach($tables as $table){
                        ?>
                        <div class="col-lg-3 col-sm-6">
                            <div class="card">
                                <div class="content">
                                    <div class="row" id="printableArea">
                                        <div class="col-xs-5">
                                            
                                            <?php
                                            if($table->status != "0"){
                                                        echo "<div class='icon-big icon-danger text-center'>";
                                                        echo "<i class='ti-shopping-cart-full'></i>";
                                                    }
                                                    else{
                                                        echo "<div class='icon-big icon-success text-center'>";
                                                        echo "<i class='ti-shopping-cart'></i>";
                                                    }
                                            ?>
                                                
                                            </div>
                                        </div>
                                        <div class="col-xs-7">
                                            <div class="numbers">
                                                <p><?php echo $table->name; ?></p>
                                                <?php
                                                    if($table->price != "0"){
                                                        echo "$".$table->price;
                                                    }
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="footer">
                                        <hr />
                                        <div class="stats">
                                            <a href="<?php echo base_url(); ?>index.php/table/<?php echo $table->id;?>"><i class="ti-location-arrow"></i>add</a>
                                            <?php
                                             if($table->status == "1"){
                                                 ?>
                                                        <p class="text-center"><a href="<?php echo base_url(); ?>index.php/checkout/<?php echo $table->id;?>"><i class="ti-money"></i>check out</a></p> 
                                                   <?php }
                                            ?> 
                                            <!-- p class="text-center"><a onclick="printDiv('printableArea')"><i class="ti-money"></i>check out</a></p -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="<?php echo base_url(); ?>assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="<?php echo base_url(); ?>assets/js/bootstrap-checkbox-radio.js"></script>


    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
	<script src="<?php echo base_url(); ?>assets/js/paper-dashboard.js"></script>

	<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
	<script src="<?php echo base_url(); ?>assets/js/demo.js"></script>

<script type="text/javascript">
function printDiv(divName) {
    var printContents = document.getElementById(divName).innerHTML;
    var originalContents = document.body.innerHTML;
    document.body.innerHTML = printContents;
    window.print();
    document.body.innerHTML = originalContents;
}
</script>

</html>
