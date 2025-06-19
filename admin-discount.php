
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
					<li>Discount</li>
					<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
			<lottie-player src="https://assets8.lottiefiles.com/packages/lf20_8g3topaw.json"  background="transparent"   speed="1"  style="width: 1100px; height: 200px;"  loop autoplay></lottie-player>
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
				<span>D</span>iscount
			</h3>

			
			
			<!-- form -->
			<form action="admin-discount-code.php" method="post">
				<form>
					<div class="dropdown">
						<label for="exampleInputDropdown1" class="form-label">Product</label>
							<select name="product_id" class="form-control">
							<?php 
									$qproduct = "select * from product";
									$rsproduct= mysqli_query($con,$qproduct);
									while($rowproduct = mysqli_fetch_array($rsproduct)){
										echo "<option value=$rowproduct[0]> $rowproduct[1] </option>";
									}
								?>
							</select>
					</div>	   
					<div class="mb-3">
						<br>
						<label for="exampleInputPrice1" class="form-label">Percentage</label>
						<input type="text" required pattern="[0-9%]" class="form-control" id="exampleInputPrice1" name="discount_percentage">
					</div>
					<br>
					<button type="submit" class="btn btn-primary">Submit</button>
				  </form>
			</form>
			<!-- //form -->
			
		</div>
	</div>
	<!-- //form part -->


	<!-- table  part -->
	<div class="contact py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">
			<table class="table table-hover">
				
			
				<tr>
					<th scope="col" thead class="table-dark">Product</th>
					<th scope="col" thead class="table-dark">Percentage</th>
					<th scope="col" thead class="table-dark">Action</th>
				<?php
				if(isset($_GET['id'])){
					$qdelete = "delete from discount where discount_id="  . $_GET['id'];
					mysqli_query($con,$qdelete);

				}
					$q="Select d.*,p.product_name from discount d,product p where p.product_id=d.product_id order by discount_id desc";
					$rs=mysqli_query($con,$q);
					while($row=mysqli_fetch_array($rs)){
				?>

				<tr>
					<td><?php echo $row['product_name']; ?></td>
					<td><?php echo $row['discount_percentage']; ?></td>

					<td>
						<a  href="admin-discount-edit.php?id=<?php print $row[0]?>"  class="btn btn-primary">Edit</a>
						<a  href="admin-discount.php?id=<?php print $row[0]?>" onclick="return confirm('Do you want to delete ?')" class="btn btn-danger">Delete</a>
					</td>
				  </tr>
				<?php 
					} 
				?>
					
				  </tr>
				</thead>
				<tbody class="table-group-divider">
				</tbody>
			  </table>
		</div>
	</div>
		
	<!-- //table part -->

	
<?php include("footer.php");?>
