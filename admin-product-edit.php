
<?php include("vheader.php");?>
<?php include("adminmenu.php");?>

<?php
	include("connection.php");

	$product_id=$_GET['id'];
	$q="select * from product where product_id=$product_id";
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
					<li>Edit Product</li>
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
				<span>P</span>roduct
			</h3>
			
			<!-- form -->
			<form action="admin-product-edit-code.php" method="post" enctype="multipart/form-data">
		<input type="hidden" name="product_id" value="<?php print $product_id;?>"> 
			<div class="dropdown">
						<label for="exampleInputDropdown1" class="form-label">Category</label>
							<select name="category_name" class="form-control">
								<?php 
									$qcat = "select * from category";
									$rscat= mysqli_query($con,$qcat);
									while($rowcat = mysqli_fetch_array($rscat)){
										echo "<option value=$rowcat[0]> $rowcat[1] </option>";
								
									}
								?>			
							</select>
					</div>	  
					<div class="mb-3">
						
					<div class="mb-3">
						<br>
						<label for="exampleInputProductName1" class="form-label">Product Name</label>
						<input type="text" class="form-control" required minlength=4 maxlength="50" value="<?php print $row['product_name']?>" id="exampleInputEmail1" name="product_name" aria-describedby="emailHelp">
						
					</div>
						<label for="exampleInputPhoto1" class="form-label">Photo</label>
						<input type="file" class="form-control" value="<?php print $row['image']?>" id="exampleInputEmail1" name="image"  placeholder="Please insert an image file..." accept="image/*" required aria-describedby="emailHelp">
						
					</div>
					<div class="mb-3">
						<label for="exampleInputPrice1" class="form-label">Price</label>
						<input type="number" class="form-control"required minlength="1000"  value="<?php print $row['product_price']?>" id="exampleInputEmail1" name="product_price" aria-describedby="emailHelp">
					</div>
					<div class="mb-3">
						<label for="exampleInputDescription1" class="form-label">Description</label>
						<p>
							<textarea rows="5" class="form-control" cols="50" minlength=10 maxlength=300   placeholder="Write Description Here" name="description"><?php print $row['description']?> </textarea> 
						</p>	
					</div>
					<button type="submit" class="btn btn-primary">Submit</button>
			</form>
			<!-- //form -->


		</div>
	</div>
	<!-- //form part -->


	<!-- table  part -->
	<div class="contact py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">
		</div>
	</div>
	</div>	
	<!-- //table part -->

	<?php include("footer.php");?>
