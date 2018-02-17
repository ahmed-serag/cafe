<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<!--meta name="description" content="My First Work"!-->
		<title>Remas Caffe&Restaurant</title>
		
		
	</head>
	
	<style>
		#uppage{
			color:grey;
			margin-left:auto;
			margin-right:auto;
		}
		#wholepage{
			color:black;
			width:180px;
			margin-left:auto;
			margin-right:auto;
		}
		#hed{
			
		}
	</style>
	<body>
    <a href="<?php echo base_url(); ?>">Home</a>
		<div id="wholepage">
			<div id="uppage" >
				<fieldset style="padding: 20PX;">
					<h3 align="center" width=90px id=hed>Remas Caffe&Restaurant</h3>
					<p id="time">
						<script> 
							document.getElementById("time").innerHTML = Date();
						</script>
					</p>
					<label>Table: </label>
					<input type="text" name="Table_Num" maxlength=3 value="<?php echo $table[0]->name;?>">
				</fieldset>
			</div>
				<fieldset>
					<table align="center" border=1px width=100px >
						<tbody>
							<tr>
								<th width=100>Quantity</th>
								<th>ITEAM</th>
								<th width=100>PRICE</th>
							</tr>
                             <?php
                                foreach($table_food as $tf){
                             ?>
                            <tr data-iterate="iteam" align="center" font="arial">
								<td contenteditable=true><?php echo $tf->quantity; ?></td>
								<td contenteditable=true><?php echo $tf->item_name; ?></td>
								<td contenteditable=true><?php echo $tf->total; ?></td>
							</tr>
                            <?php } ?>
						</tbody>
					</table>
					<br>
					<div align="right">
						<label>price </label>
						<input type="float" name="price_before"  value="<?php 
                        echo $table[0]->price;
                          ?>"><br>

						<label font="bold">Service </label>
						<input type="float" name="Total" value="<?php 
                        $price = $table[0]->price;
                        $service = $price * (.12);
                        echo $service;
                          ?>"><br>
						<label>Total </label>
						<input type="float" name="Total"  value="<?php 
                        $total = $table[0]->price + $service;
                        echo $total;
                          ?>"><br>
					</div>
				</fieldset>
		</div >
	</body>
	<script src="<?php echo base_url(); ?>assets/js/jquery-1-13.min.js"></script>
    <script>
       $( document ).ready(function() {
      
        var divName = 'wholepage'
        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
        });
    </script>
</html>
