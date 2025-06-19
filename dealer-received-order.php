
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
                    <li>Received Orders</li>
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
				<span>R</span>eceived Orders
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
					<th scope="col">Wholesaler</th>
					<th scope="col">Product</th>
					<th scope="col">Quantity</th>
					<th scope="col">Remarks</th>
                    <th scope="col">Payment Status</th>
				  </tr>
                  </thead>
				  <tbody class="table-group-divider">
				<?php
					$q="Select u.name,u.contact, o.*,p.product_name from order_master o,product p,users u where o.product_id=p.product_id and  o.user_id=u.user_id  order by order_id desc";
					$rs=mysqli_query($con,$q);
					while($row=mysqli_fetch_array($rs)){
				?>
					<tr>
					<td><?php echo $row['order_date']; ?></td>
					<td><?php echo $row['name']; ?> , M : <?php echo $row['contact']; ?> </td>
					
					<td><?php echo $row['product_name']; ?></td>
					<td><?php echo $row['quantity']; ?></td>
					
					<td><?php echo $row['remarks']; ?></td>
					<td><?php echo $row['payment_status']; ?></td>
					<td>
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
