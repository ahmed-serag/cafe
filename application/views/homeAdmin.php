<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url(); ?>assets/img/apple-icon.png">
	<link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Brand</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

	<!--     Fonts and icons     -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

	<!-- CSS Files -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/css/material-kit.css" rel="stylesheet"/>
	<style>
	
	</style>
	    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="<?php echo base_url(); ?>assets/css/demo.css" rel="stylesheet" />
</head>


<!-- Navbar will come here -->

<!-- end navbar -->
<body>

	<input type="hidden" value="<?php echo base_url(); ?>" id="base_url" >
<div class="wrapper">
	<!-- you can use the class main-raised if you want the main area to be as a page with shadows -->
	<div class="main">

<nav class="navbar navbar-default" role="navigation">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
					<form class="navbar-form navbar-right" role="search" action="#" id="SearchForm" >
                            <div class="form-group">
                       		
							 
<a class="btn btn-danger" href="<?php echo $this->config->base_url(); ?>index.php/admin/signout" >Sign out</a>
                            </div>
                        
						<div class="form-group  is-empty">
						
							<span class="material-input"></span>
						<span class="material-input"></span></div>
					
	                </form>
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav">
	<li class="active"><a data-toggle="modal" data-target="#myModal">ِAdd section</a></li></div>
				</div>
			</nav>
			<div class="tim-row">
				<div class="col-md-12">
					<table class="table">
						<thead>
							<tr>
								<th class="text-center">#</th>
								<th>Name</th>
					
								<th class="text-right">Actions</th>
							</tr>
						</thead>
						<tbody id="tableData">
							
						</tbody>
					</table>
					









<nav class="navbar navbar-default" role="navigation">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
					<form class="navbar-form navbar-right" role="search" action="#" id="SearchForm" >
                            <div class="form-group">
                                <select style="background: none;border: 0px;" name="sectiontype" id="sectiontype">
                                    <option  style="color: black;" selected="selected" value=0 >ALL</option>
                             



										<?php	foreach($sections as $section)
					{
					
						?>
 	 <option  style="color: black;" value="<?php echo $section->id ; ?>"><?php echo $section->name ; ?></option>
                  
		<?php		} 
				
				?>

                                </select>
                            </div>
                        
						<div class="form-group  is-empty">
						
							<span class="material-input"></span>
						<span class="material-input"></span></div>
					
	                </form>
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav">
							<li class="active"><a data-toggle="modal" data-target="#myModalfood">ِAdd food</a></li>
						</ul>
					</div>
				</div>
			</nav>
			<div class="tim-row">
				<div class="col-md-12">
					<table class="table">
						<thead>
							<tr>
								<th class="text-center">#</th>
								<th>Name</th>
								<th>Section</th>
								
								<th class="text-right">Price</th>
								<th class="text-right">Actions</th>
							</tr>
						</thead>
						<tbody id="tableData1">
							
						</tbody>
					</table>
				</div>
			</div>


</div></div></div></div>

<!-- Modal Section -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">New Section</h4>
      </div>    
      <form method="post" action="<?php echo base_url(); ?>index.php/admin/add_section">
      <div class="modal-body">

       		<div class="col-sm-12">
				<div class="form-group label-floating">
					<label class="control-label">name</label>
					<input name="name" class="form-control">
				</div>
			</div>
			
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default btn-simple" data-dismiss="myModal">Close</button>
        <button type="submit" class="btn btn-info btn-simple">Save</button>
      </div>
    </form>
    </div>

  </div>
</div>


<!-- Modal Food -->
<div class="modal fade" id="myModalfood" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">New Food</h4>
      </div>    
      <form method="post" action="<?php echo base_url(); ?>index.php/admin/add_food">
      <div class="modal-body">
<input type="hidden"name="id"  class="form-control">
       		<div class="col-sm-12">
				<div class="form-group label-floating">
					<label class="control-label">name</label>
					<input name="item_name"  class="form-control">
				</div>
			</div>
			

			<div class="col-sm-12">
				<div class="form-group">
					<label class="control-label">Section</label>
					<select style="border: 0;color: #e47070; "  name="section">
                        <?php
                        foreach($sections as $section){
                            ?>
                            <option value="<?php echo $section->id;  ?>"><?php echo $section->name; ?></option>
                        <?php } ?>
					</select>
				</div>
			</div>
					
	
			<div class="col-sm-12">
				<div class="form-group label-floating">
					<label class="control-label">price</label>
					<input name="price"  class="form-control">
				</div>
			</div>
    
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default btn-simple" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-info btn-simple">Save</button>
      </div>
    </form>
    </div>

  </div>
</div>




<!-- Modal Section -->
<div class="modal fade" id="editmyModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Edit Section</h4>
      </div>    
      <form method="post" action="<?php echo base_url(); ?>index.php/admin/editsection">
      <div class="modal-body">
<input type="hidden"name="id" id="idEditSection" class="form-control">
       		<div class="col-sm-12">
				<div class="form-group label-floating">
					<label class="control-label"></label>
					<input name="name" id ="nameEditSection" class="form-control">
				</div>
			</div>
			
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default btn-simple" data-dismiss="myModal">Close</button>
        <button type="submit" class="btn btn-info btn-simple">Save</button>
      </div>
    </form>
    </div>

  </div>
</div>


<!-- Modal Food -->
<div class="modal fade" id="editmyModalfood" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Edit Food</h4>
      </div>    
      <form method="post" action="<?php echo base_url(); ?>index.php/admin/editfood">
      <div class="modal-body">
<input type="hidden"name="id" id="idsectionEditFood" class="form-control">
       		<div class="col-sm-12">
				<div class="form-group label-floating">
					<label class="control-label"></label>
					<input name="item_name" id="namesectionEditFood" class="form-control">
				</div>
			</div>
			

			<div class="col-sm-12">
				<div class="form-group">
					<label class="control-label">Section</label>
					<select style="border: 0;color: #e47070; "  id="sectionEditFood" name="section">
                        <?php
                        foreach($sections as $section){
                            ?>
                            <option value="<?php echo $section->id;  ?>"><?php echo $section->name; ?></option>
                        <?php } ?>
					</select>
				</div>
			</div>
					
	
			<div class="col-sm-12">
				<div class="form-group label-floating">
					<label class="control-label"></label>
					<input name="price" id="priceEditFood" class="form-control">
				</div>
			</div>
    
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default btn-simple" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-info btn-simple">Save</button>
      </div>
    </form>
    </div>

  </div>
</div>


</body>
<script src="<?php echo base_url(); ?>assets/js/jquery.min.js" type="text/javascript"></script>
	<!--    functions[salah][js] -->

	<!--   Core JS Files   -->
	

	<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>assets/js/material.min.js"></script>

	<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
	<script src="<?php echo base_url(); ?>assets/js/nouislider.min.js" type="text/javascript"></script>

	<!--  Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
	<script src="<?php echo base_url(); ?>assets/js/bootstrap-datepicker.js" type="text/javascript"></script>

	<!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
	<script src="<?php echo base_url(); ?>assets/js/material-kit.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/js/functionsFile.js" type="text/javascript"></script>




</html>
