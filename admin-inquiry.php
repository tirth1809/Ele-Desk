<?php include("vheader.php");?>
<?php include("adminmenu.php");?>

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
					<li>Dealer Inquiry</li>
				</ul>

				<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<lottie-player src="https://assets6.lottiefiles.com/packages/lf20_ufdkhc9o.json"  background="transparent"  speed="1"  style="width: 1100px; height: 300px;"  loop autoplay></lottie-player>

			</div>
		</div>
	</div>
	<!-- //page -->



	<!-- table  part -->
	<div class="contact py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">
			<table class="table table-hover">
				<thead class="table-dark">
				  <tr>
					<th scope="col">Name</th>
					<th scope="col">Email</th>
					<th scope="col">Address</th>
					<th scope="col">Contact</th>
				
				  </tr>
				</thead>
				<tbody class="table-group-divider">
				<?php
				if(isset($_GET['id'])){
					$qdelete = "delete from users where user_id="  . $_GET['id'];
					mysqli_query($con,$qdelete);

				}
					$q="Select * from inquiry ";
					$rs=mysqli_query($con,$q);
					while($row=mysqli_fetch_array($rs)){
				?>

					<tr>
					<td><?php echo $row['name']; ?></td>
					<td><?php echo $row['email']; ?></td>
					<td><?php echo $row['address']; ?></td>
					<td><?php echo $row['contact']; ?></td>
				
					
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
<?php include("footer.php");
?>
