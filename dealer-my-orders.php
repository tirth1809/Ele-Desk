
<?php include("vheader.php");?>
<?php include("dealermenu.php");?>

<?php
	include("connection.php");
	$user_id= $_SESSION['user_id'];

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
                    <li>Order View</li>
					<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<lottie-player src="https://assets2.lottiefiles.com/packages/lf20_thFEdV.json"  background="transparent"  speed="1"  style="width: 1100px; height: 300px;"  loop autoplay></lottie-player>
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
				<span>M</span>y Orders
			</h3>
			
			
			
			<!-- form -->
			<!-- //form -->
	<!-- //form part -->


	<!-- table  part -->
	<div class="contact py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">
		<table class="table table-hover">
				<thead class="table-dark">
				  <tr>
					<th scope="col">Order Date</th>
					<th scope="col">Product</th>
					<th scope="col">Quantity</th>
					<th scope="col">Price</th>
					<th scope="col">Payment Status</th>
					<th scope="col">Remarks</th>
                   
				  </tr>
				</thead>
				<tbody class="table-group-divider">
				<?php
					$q="Select o.*,p.product_name,p.product_price from order_master o,product p where o.product_id=p.product_id and o.user_id=$user_id  order by order_id desc";
					$rs=mysqli_query($con,$q);
					while($row=mysqli_fetch_array($rs)){
				?>
					<tr>
					<td><?php echo $row['order_date']; ?></td>
					<td><?php echo $row['product_name']; ?></td>
					<td><?php echo $row['quantity']; ?></td>
					<td><?php echo $row['product_price']; ?></td>
					<td><?php echo $row['payment_status']; ?></td>
					<td><?php echo $row['remarks']; ?></td>
					</td>
				  </tr>

				<?php } ?>

				</tbody>
			  </table>
		</div>
	</div>
</div>
	<!-- //table part -->

	
<?php include("footer.php");?>
