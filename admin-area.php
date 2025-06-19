
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
					<li>Area</li>
					
			<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<lottie-player src="https://assets8.lottiefiles.com/packages/lf20_mvxohpix.json"  background="transparent"  speed="1"  style="width: 1100px; height: 300px;"  loop autoplay></lottie-player>
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
				<span>A</span>rea
			</h3>

			
			<!-- form -->
			<form action="admin-area-code.php" method="post">
				<form>
					<div class="mb-3">
					  <label for="exampleInputEmail1" class="form-label">Area Name</label>
					  <input type="text" required minlength="5" maxlength="100" class="form-control" id="exampleInputEmail1" name="area_name" aria-describedby="emailHelp" pattern="^\S.*$" />
					<!-- <input type="text" required minlength=5 maxlength="100" class="form-control" id="exampleInputEmail1" name="area_name" aria-describedby="emailHelp" required> -->
				</div>
					<div class="mb-3">
					  <label for="exampleInputPassword1" class="form-label">Pincode</label>
				<input type="text" required pattern="[0-9]{6}" class="form-control" id="exampleInputPassword1" name="pin_code">	
				</div>
					<button type="submit" class="btn btn-primary">Submit</button>
				  </form>
			</form>
			<!-- //form -->


		</div>
	</div>

	<!-- table  part -->
	<div class="contact py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">
			<table class="table table-hover">
				<thead class="table-dark">
				  <tr>
					<th scope="col">Area Name</th>
					<th scope="col">Pincode</th>
					<th scope="col">Action</th>
				  </tr>
				</thead>
				<tbody class="table-group-divider">
				 
				<?php
				if(isset($_GET['id'])){
					$qdelete = "delete from area_master where area_id="  . $_GET['id'];
					mysqli_query($con,$qdelete);

				}
					$q="Select * from area_master order by area_id desc";
					$rs=mysqli_query($con,$q);
					while($row=mysqli_fetch_array($rs)){
				?>

					<tr>
					<td><?php echo $row['area_name']; ?></td>
					<td><?php echo $row['pin_code']; ?></td>
					<td>
					<a  href="admin-area-edit.php?id=<?php print $row[0]?>"  class="btn btn-primary">Edit</a>	
					<a  href="admin-area.php?id=<?php print $row[0]?>" onclick="return confirm('Do you want to delete ?')" class="btn btn-danger">Delete</a>

					</td>
				  </tr>
				<?php } ?>
				
				</tbody>
			  </table>
		</div>
	</div>
	</div>	
	<!-- //table part -->
<?php include("footer.php");
?>