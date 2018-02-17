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

	<title>Remas CAfe-Res</title>

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
                <a href="#" class="simple-text">
                    Remas CAfe-Restaurant
                </a>
            </div>
            <form action="<?php echo base_url(); ?>index.php/welcome/add_items" method="post">
            <ul class="nav" id="items-list">
              <input type="hidden" name="table" value="<?php echo $table; ?>"/>
                <li> 
                    <button type="submit" class="btn btn-info btn-fill btn-wd">
                        submit
                    </button>
                </li>
                <?php
                foreach($table_food as $table){
                    ?>
                    <li>
                    <a href="#">
                        <i class="ti-view-list"></i>
                        <p><?php echo $table->item_name; ?></p>
                        <input type="hidden" name="item[]" value="<?php echo $table->id; ?>"/>
                        <input name = "quantity[]" value="<?php echo $table->quantity; ?>"/>
                    </a>
                </li>
                <?php } ?>
               
            </ul>
            </form>
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
                    <a class="navbar-brand" href="#">Table</a>
                </div>
            </div>
        </nav>
        <div class="content">
            <div class="container-fluid">
                <div class="row">                               
                    <?php
                    foreach ($sections as $section) 
                    {
                        ?>
                      <div class="col-xs-4">
                        <div class="card">
                            <div class="header">
                                <h4 class="title"><?php echo $section->name ?></h4>
                            </div>
                            <div class="content">
                             <ul class="list-unstyled team-members">
                                    <?php

                                    foreach ( $food as $item)
                                    {
                                        if ($section->id == $item->section){
                                            ?>
                                                <li>
                                                    <div class="row">
                                                        <div class="col-xs-3">
                                                            <div class="avatar">
                                                                <img src="<?php echo base_url(); ?>assets/img/faces/face-0.jpg" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-3">
                                                            <a onclick="add_items('<?php  echo $item->item_name; ?>', '<?php  echo $item->id; ?>');">
                                                            <?php  echo $item->item_name; ?>
                                                            </a>
                                                            <br />
                                                            <span class="text-muted"><small>$   <?php  echo $item->price; ?></small></span>
                                                        </div>
                                                    </div>
                                                </li>
                                            <?php
                                        }
                                    } 
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </div>   
                     <?php } ?>
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
    
    <script>
    function add_items(item_name, id){
      
        this.$pizzaList = $('#items-list');

        console.log(this.$pizzaList);
        this.$pizzaList.append('<li><a href="#"><i class="ti-view-list"></i><p>'+item_name+'</p><input type="hidden" name="item[]" value="'+id+'"/><input name="quantity[]" value="1"/></a></li>');
    }
    </script>

</html>
