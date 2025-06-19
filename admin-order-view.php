
<?php include("vheader.php");?>
<?php include("adminmenu.php");?>

<?php
	include("connection.php");
	$user_id= $_SESSION['user_id'];

	if(isset($_GET['order_id'])){
		$qupd = "update order_master set payment_status='Y' where order_id=" . $_GET['order_id'];
		$rsUpd=mysqli_query($con,$qupd);
		// print $qupd;		
	}
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
<lottie-player src="https://assets2.lottiefiles.com/packages/lf20_0vKKEb.json"    speed="1"  style="width: 1100px; height: 300px;"  loop autoplay></lottie-player>
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
				<span>O</span>rders
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
					<th scope="col">Dealer</th>
					<th scope="col">Product</th>
					<th scope="col">Quantity</th>
					<th scope="col">Price</th>
					<th scope="col">Remarks</th>
                    <th scope="col">Payment Status</th>
                    <th scope="col">Action</th>
				  </tr>
				</thead>
				<tbody class="table-group-divider">
				<?php
					$q="Select o.*,p.product_name,p.product_price,u.name,u.contact from order_master o,product p,users u where o.user_id=u.user_id and  o.product_id=p.product_id and o.user_id in (select user_id from users where user_type='Dealer') order by order_id desc";
					$rs=mysqli_query($con,$q);
					while($row=mysqli_fetch_array($rs)){
				?>
					<tr>
					<td><?php echo $row['order_date']; ?></td>	
					<td>
						<?php echo $row['name']; ?>
						<br> M:- <?php echo $row['contact']; ?>
					</td>
					
					<td><?php echo $row['product_name']; ?></td>
					<td><?php echo $row['quantity']; ?></td>
					<td><del>&#8377;</del> <?php echo $row['product_price']; ?></td>
					<td><?php echo $row['remarks']; ?></td>
					<td><?php echo $row['payment_status']; ?></td>
					<td>
					
					

	
					<?php 
							if($row['payment_status']=="N"){
								
					?>
							<a href="admin-order-view.php?order_id=<?php echo $row['order_id']?>" onclick="return confirm('Do you want to update the payment status?')" > Payment Received </a>

							<?php }else{ ?>  
								<a href="admin-outward-add.php?order_id=<?php print $row['order_id'] ?>"> Outward </a>

								<?php } ?>
					
					<?php ///echo $row['payment_status']; ?>
				</td>
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
