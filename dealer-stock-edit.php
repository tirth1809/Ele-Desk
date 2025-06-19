<?php include("vheader.php");?>
<?php include("dealermenu.php");?>

<?php
	include("connection.php");
    $stock_id =$_GET['id'];
	$q="select * from stocks where stock_id =$stock_id ";
	$rs=mysqli_query($con,$q);
	$row=mysqli_fetch_array($rs);
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
					<li>Edit Stock</li>
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
				<span>E</span>dit Stock
			</h3>
			
			<!-- form -->
			<form action="dealer-stock-edit-code.php" method="post">
			<input type="hidden" name="stock_id" value="<?php print $stock_id;?>"> 
					<div class="dropdown">
						<label for="exampleInputDropdown1" class="form-label">Product</label>
						<select name="product_id" class="form-control">
						<?php 
									$qstock = "select * from product";
									$rsstock= mysqli_query($con,$qstock);
									while($rowstock = mysqli_fetch_array($rsstock)){
										if($rowstock[0] == $row[1] )
										echo "<option selected value=$rowstock[0]> $rowstock[1] </option>";
										else
										echo "<option  value=$rowstock[0]> $rowstock[1] </option>";
											
									}
								?>
							</select>
					
					<div class="mb-3">
						<br>
						<label for="exampleInputQuantity1" class="form-label">Quantity</label>
						<input type="number"  min="1" pattern="[1-9]"class="form-control" value="<?php print $row['quantity']?>"id="exampleInputQuantity1" name="quantity">
					</div>
                    <div class="mb-3">
						<label for="exampleInputDate1" class="form-label">Date</label>
						<input type="date" class="form-control" value="<?php print $row['date']?>"id="exampleInputDate1" name="date"  min="2022-01-01">
					</div>
					
					<button type="submit" class="btn btn-primary">Submit</button>
				  
			</form>
			<!-- //form -->


		</div>
	</div>
	<!-- //form part -->


	<!-- table  part -->
	
	<!-- //table part -->

	
<?php include("footer.php");?>
