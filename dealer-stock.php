
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
					<li>Stock</li>
					<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<lottie-player src="https://assets3.lottiefiles.com/packages/lf20_L9pDkC.json"  background="transparent"  speed="1"  style="width: 1100px; height: 300px;"  loop autoplay></lottie-player>
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
				<span>S</span>tock
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
					<th scope="col">Product</th>
					<th scope="col">Quantity</th>
					<th scope="col">Date</th>
					<th scope="col">Action</th>
				  </tr>
				</thead>
				<tbody class="table-group-divider">
				<?php
				if(isset($_GET['id'])){
					$qdelete = "delete from stocks where stock_id="  . $_GET['id'];
					mysqli_query($con,$qdelete);

				}
					$q="Select s.*,p.product_name from stocks s,product p where s.user_id=$user_id and p.product_id=s.product_id order by stock_id desc";
					$rs=mysqli_query($con,$q);
					while($row=mysqli_fetch_array($rs)){
				?>
					<tr>
					<td><?php echo $row['product_name']; ?></td>
					<td><?php echo $row['quantity']; ?></td>
					<td><?php echo $row['date']; ?></td>

				
					<td>
					<a  href="dealer-stock-edit.php?id=<?php print $row[0]?>"  class="btn btn-primary">Edit</a>
						<a  href="dealer-stock.php?id=<?php print $row[0]?>" onclick="return confirm('Do you want to delete ?')" class="btn btn-danger">Delete</a>					

					</td>
				  </tr>
				<?php 	
					} 
				?>
				 
				</tbody>
			  </table>
		</div>
	</div>
	</div>	
	<!-- //table part -->

	
<?php include("footer.php");?>
