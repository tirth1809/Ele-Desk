
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
					<li>Category</li>
					<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<lottie-player src="https://assets8.lottiefiles.com/packages/lf20_my6mfqzk.json"  background="transparent"  speed="1"  style="width: 1100px; height: 300px;"  loop autoplay></lottie-player>
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
				<span>C</span>ategory
			</h3>
			


			<!-- form -->
			<form action="admin-cat-code.php" method="post">
				<form>
					<div class="mb-3">
					  <label for="exampleInputEmail1" class="form-label">Category Name</label>
					  <input type="text" required minlength=2 maxlength="50" class="form-control" id="exampleInputEmail1" name="category_name" aria-describedby="emailHelp" required>
					</div>
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
				<thead class="table-dark">
				  <tr>
					<th scope="col">Name</th>
					<th scope="col">Action</th>
				  </tr>
				</thead>
				<tbody class="table-group-divider">

				<?php
				if(isset($_GET['id'])){
					$qdelete = "delete from category where category_id="  . $_GET['id'];
					mysqli_query($con,$qdelete);

				}
					$q="Select * from category order by category_id desc";
					$rs=mysqli_query($con,$q);
					while($row=mysqli_fetch_array($rs)){
				?>

					<tr>
					<td><?php echo $row['category_name']; ?></td>
					<td>
						<a  href="admin-cat-edit.php?id=<?php print $row[0]?>"  class="btn btn-primary">Edit</a>
						<a  href="admin-cat.php?id=<?php print $row[0]?>" onclick="return confirm('Do you want to delete ?')" class="btn btn-danger">Delete</a>
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
