
<?php include("vheader.php");?>
<?php include("dealermenu.php");?>

<?php
	include("connection.php");

	$order_id = $_GET['order_id'];
	$q="Select * from order_master where order_id=$order_id";
	$rsorder=mysqli_query($con,$q);
	$roworder=mysqli_fetch_array($rsorder);
	$product_id = $roworder['product_id'];
	$quantity = $roworder['quantity'];
	$remarks = $roworder['remarks'];
	
?>


	<!-- banner-2 -->
	<!-- //banner-2 -->
	<!-- page -->
	<div class="services-breadcrumb">
		<div class="agile_inner_breadcrumb">
			<div class="container">
				<ul class="w3_short">
					<li>
						<a href="index.html">Home</a>
						<i>|</i>
					</li>
					<li>Outward</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- //page -->

	<!-- form part -->
	<div class="contact py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">
			<!-- tittle heading -->
			<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
				<span>O</span>utward
			</h3>
			<div class="contact py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">
			<!-- form -->
			<form action="dealer-outward-add-code.php" method="post">
				<form>
				<div class="mb-3">
						<label>Order date</label>
						<input type="text" readonly value="<?php print date('d-m-Y') ?>" class="form-control" name="date">
						
				</div>
				<div class="mb-3">
						<label>Order id</label>
						<input type="text" readonly value="<?php print $order_id; ?>" class="form-control" name="order_id">
				</div>
				<div class="dropdown">
						<label for="exampleInputDropdown1" class="form-label">Product</label>
							<select name="product_id" class="form-control">
							<?php 
									$qstock = "select * from product";
									$rsstock= mysqli_query($con,$qstock);
									while($rowstock = mysqli_fetch_array($rsstock)){
										if($rowstock[0]== $product_id)
												echo "<option selected value=$rowstock[0]> $rowstock[1] </option>";
										else 
											echo "<option value=$rowstock[0]> $rowstock[1] </option>";
										
									}
								?>
							</select>
					</div>	  
						
					<div class="mb-3">
				<br>
						<label>Quantity</label>
						<input type="number" class="form-control" value="<?php print $quantity ?>" name="quantity">
					</div>
					<div class="mb-3">
						
					<label>Remarks</label>
						<input type="textarea" col="50" row="5" class="form-control" value="<?php print $remarks ?>" name="remarks">
					</div>
				<br>
					<button type="submit" class="btn btn-primary">Submit</button>
				  </form>
			</form>
			<!-- //form -->
		</div>
	</div>
	</div>	
	<!-- //form part -->
	
	<?php 
			if(isset($_GET['outofstock'])){
				echo "<script> alert('Out of stock ') </script>";
			}
	?>

	<?php include("footer.php");
?>