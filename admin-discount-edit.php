
<?php include("vheader.php");?>
<?php include("adminmenu.php");?>

<?php
	include("connection.php");

	$discount_id=$_GET['id'];
	$q="select * from discount where discount_id=$discount_id";
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
					<li>Edit Discount </li>
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
				<span>E</span>dit Discount 
			</h3>
			
			<!-- form -->
			<form action="admin-discount-edit-code.php" method="post">
			<input type="hidden" class="form-control" value="<?php print $row['discount_id']?>" id="exampleInputEmail1" name="discount_id" aria-describedby="emailHelp">
			<div class="dropdown">
						<input type="hidden" class="form-control" value="<?php print $row['product_id']?>" id="exampleInputEmail1" name="product_id" aria-describedby="emailHelp">
						<div class="mb-3">
						<br>
						<label for="exampleInputPrice1" class="form-label">Percentage</label>
						<input type="text" required pattern="[0-9]+" class="form-control" value="<?php print $row['discount_percentage']?>" id="exampleInputEmail1" name="discount_percentage" aria-describedby="emailHelp">
					</div>
					<br>
					<button type="submit" class="btn btn-primary">Submit</button>
				  </form>
			</form>
			<!-- //form -->
								

		</div>
	</div>
	<!-- //form part -->
	<!-- //form part -->


	<!-- table  part -->
	
		
	<!-- //table part -->

	
<?php include("footer.php");?>
