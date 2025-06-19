
<?php include("vheader.php");?>
<?php include("dealermenu.php");?>

<?php
	include("connection.php");
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
					<li>Send Order</li>
					<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<lottie-player src="https://assets7.lottiefiles.com/packages/lf20_pMgZwk.json"  background="transparent"  speed="1"  style="width: 1100px; height: 300px;"  loop autoplay></lottie-player>
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
				<span>S</span>end-Order
			</h3>
			<div class="contact py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">
			<!-- form -->
			<form action="dealer-order-send-code.php" method="post">
				<form>
				<div class="mb-3">
						<label>Order date</label>
						<input type="text" readonly value="<?php print date('d-m-Y') ?>" class="form-control" name="date">
				</div>
                <div class="dropdown">
						<label for="exampleInputDropdown1" class="form-label">Product</label>
							<select name="product_id" class="form-control">
							<?php 
									$qstock = "select * from product";
									$rsstock= mysqli_query($con,$qstock);
									while($rowstock = mysqli_fetch_array($rsstock)){
										echo "<option value=$rowstock[0]> $rowstock[1] </option>";
									}
								?>
							</select>
					</div>	  
						
					<div class="mb-3">
				<br>
						<label>Quantity</label>
						<input type="number" class="form-control" name="quantity">
					</div>
					<div class="mb-3">
				<br>
					<label>Remarks</label>
						<input type="textarea" col="50" row="5"class="form-control" name="remarks">
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