<?php include("vheader.php");?>
<?php include("dealermenu.php");?>
<?php
	include("connection.php");
	$user_id= $_SESSION['user_id'];
?>
	<!-- page -->
	<div class="services-breadcrumb">
		<div class="agile_inner_breadcrumb">
			<div class="container">
				<ul class="w3_short">
					<li>
						<a href="index.html">Home</a>
						<i>|</i>
					</li>
                    <li>Inward View</li>
					<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
					<lottie-player src="https://assets5.lottiefiles.com/packages/lf20_3ysy72ke.json"  background="transparent"  speed="1"  style="width: 1200px; height: 300px;"  loop autoplay></lottie-player>
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
				<span>I</span>nward View
			</h3>
			
			

	<!-- table  part -->
	<div class="contact py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">
			<table class="table table-hover">
				<thead class="table-dark">
				
				  <tr>
					<th scope="col">Order Date</th>
                    <th scope="col">Inward Date</th>
					<th scope="col">Product</th>
					<th scope="col">Quantity</th>
					<th scope="col">Price</th>
					<th scope="col">Total</th>
					<th scope="col">Discount  Amt </th>
					<th scope="col">Payable Amt </th> 
					<th scope="col">Remarks</th>  
				</tr>
				</thead>
				<tbody class="table-group-divider">

				<?php
					$q="Select o.*,p.product_name,p.product_price from order_master om,users u,outward o,product p where  o.order_id=om.order_id and o.user_id = u.user_id  and  om.user_id=$user_id and om.product_id=p.product_id  order by order_id desc";
					$rs=mysqli_query($con,$q);
					while($row=mysqli_fetch_array($rs)){
						$OPID = $row['product_id'];
						$qDis = "select * from discount where product_id =$OPID ";
						$disPer = 0;
						$rsDis=mysqli_query($con,$qDis);
						if( $rowDis=mysqli_fetch_array($rsDis) ){
							    $disPer =  $rowDis['discount_percentage'];
						}

						$amount = $row['product_price'] * $row['quantity'];
						$disAmt = $amount * ($disPer) / 100;
						$payAmt = $amount - $disAmt;

				?>
						<tr>
						<td><?php echo $row['date']; ?></td>
						<td><?php echo $row['date']; ?></td>
						<td><?php echo $row['product_name']; ?></td>
						<td><?php echo $row['quantity']; ?></td>
						<td><?php echo $row['product_price']; ?></td>
						<td><del>&#8377;</del><?php echo$amount; ?></td>
						<td><del>&#8377;</del><?php echo round($disAmt); ?> 	(<?php echo ($disPer);?>%)</td>
						<td class="text-danger"><del>&#8377;</del><?php echo round($payAmt); ?></td>
						<td><?php echo $row['remarks']; ?></td>
						<td>
						</td>
					  </tr>

					<?php 
						} 
					?>

				</tr>
				</tbody>
			  </table>
		</div>
	</div>
</div>
	<!-- //table part -->

<?php include("footer.php");?>
