
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
					<li>product</li>
					<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<lottie-player src="https://assets10.lottiefiles.com/packages/lf20_o02kdakv.json"  background="transparent"  speed="1"  style="width: 1100px; height: 300px;"  loop autoplay></lottie-player>
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
				<span>P</span>roduct
			</h3>
			
			
			<!-- form -->
			<form action="admin-product-code.php" method="post" enctype="multipart/form-data">
				
					<div class="dropdown">
						<label for="exampleInputDropdown1" class="form-label">Category</label>
							<select name="category_name" class="form-control">
								<?php 
									$qcat = "select * from category";
									$rscat= mysqli_query($con,$qcat);
									while($rowcat = mysqli_fetch_array($rscat)){
										echo "<option value=$rowcat[0]> $rowcat[1] </option>";
								
									}
								?>			
							</select>
					</div>	  
					<div class="mb-3">
					<div class="mb-3">
						<br>
						<label for="exampleInputProductName1" class="form-label">Product Name</label>
						<input type="text" required minlength=4 maxlength="50" class="form-control" id="exampleInputProductName1" name="product_name" aria-describedby="emailHelp" required>
					</div>
						<label for="exampleInputPhoto1" class="form-label">Photo</label>
					 <input type="file" id="exampleInputPhoto1" name="image" placeholder="Please insert an image file..." accept="image/*" required/> 
					</div>
					
					<div class="mb-3">
						<label for="exampleInputPrice1" class="form-label">Price</label>
						<input type="number" required minlength="1000" class="form-control" id="exampleInputPrice1" name="cost">
					</div>
					<div class="mb-3">
						<label for="exampleInputDescription1" class="form-label">Description</label>
						<p>
							<textarea rows="5" minlength=10 maxlength=300 class="form-control" cols="50" placeholder="Write Description Here" name="description"> </textarea> 
						</p>	
					</div>
					<button type="submit" class="btn btn-primary">Submit</button>
				 
			</form>
			<!-- //form -->


		</div>
	</div>
	<!-- //form part -->


	<!-- table  part -->
	<div class="contact py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">
			<table class="table table-hover">
				<thead class="table-dark">
				  <tr>
					<th scope="col">Category</th>
					<th scope="col">Product Name</th>
					<th scope="col">Description</th>
					<th scope="col">Photo</th>
					<th scope="col">Price</th>
					<th scope="col">Action</th>
				  </tr>
				</thead>
				<tbody class="table-group-divider">
				<?php

					if(isset($_GET['id'])){
						$qdelete = "delete from product where product_id="  . $_GET['id'];
						mysqli_query($con,$qdelete);

					}
					$q="Select p.*,c.category_name from product p,category c where p.category_id=c.category_id order by product_id desc";
					$rs=mysqli_query($con,$q);
					while($row=mysqli_fetch_array($rs)){
				?>

					<tr>	
					<td><?php echo $row['category_name']; ?></td>
					<td><?php echo $row['product_name']; ?></td>	
					<td><?php echo $row['description']; ?></td>
					<td><img src="<?php echo $row['image']; ?>" width="100px" height="100px" /></td>
					<td><del>&#8377;</del> <?php echo $row['product_price']; ?></td>
					
				
					<td>
					<a  href="admin-product-edit.php?id=<?php print $row[0]?>"  class="btn btn-primary">Edit</a>

						<a  href="admin-product.php?id=<?php print $row[0]?>" onclick="return confirm('Do you want to delete ?')" class="btn btn-danger">Delete</a>
					
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
