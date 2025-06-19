
<?php include("vheader.php");?>
<?php include("adminmenu.php");?>

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
					<li>Outward-Add</li>
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
				<span>O</span>utward-Add
			</h3>
			<div class="contact py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">
			<!-- form -->
			<form action="admin-outward-code.php" method="post">
				<form>
				<div class="mb-3">
						<label>Order date</label>
						<input type="date" class="form-control" name="order date">
				</div>
				<br>
						<lable>Dealer name</lable>
						<input type="text" class="form-control" name="dealer name">
				<br>	
                <div class="dropdown">
						<label for="exampleInputDropdown1" class="form-label">Category</label>
							<select>
								<option><a class="dropdown-item" href="#">Smart Phones</a></option>
								<option><a class="dropdown-item" href="#">Smart TV</a></option>
								<option><a class="dropdown-item" href="#">Headphones</a></option>
								<option><a class="dropdown-item" href="#">Laptops</a></option>
							</select>
					</div>	  
						
					<div class="mb-3">
				<br>
						<label>Quantity</label>
						<input type="number" class="form-control" name="qty">
					</div>
					<div class="mb-3">
				<br>
					<label>Remarks</label>
						<input type="textarea" col="50" row="5"class="form-control" name="Remarks">
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
	<?php include("footer.php");
?>