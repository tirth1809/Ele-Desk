
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
					<li>Create Dealer</li>
					<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<lottie-player src="https://assets3.lottiefiles.com/private_files/lf30_bcVsEA.json"  background="transparent"  speed="1"  style="width: 1100px; height: 300px;"  loop autoplay></lottie-player>
			
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
				<span>C</span>reate
                <span>D</span>ealer
			</h3>

			
			<!-- form -->
			<form action="admin-dealer-code.php" method="post">
				<form>
					<div class="mb-3">
					  <label for="exampleInputName1" class="form-label">Name</label>
					  <input type="text" required minlength=3 maxlength="50" class="form-control" id="exampleInputName1" name="name" aria-describedby="nameHelp" required>
					</div>
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="email" class="form-control" pattern="[^ @]*@[^ @]*" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" required>
                    <br>
					<label for="exampleInputPassword1" class="form-label">Password</label>        	
					 <input type="password" class="form-control" id="exampleInputPassword1" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
					<br>
					<div class="dropdown">
						<label for="exampleInputDropdown1" class="form-label">Area</label>
                            <select name="area_id" class="form-control">
							<?php 
							if(isset($_GET['id'])){
								$qdelete = "delete from users where user_id=" . $_GET['id'];
								mysqli_query($con,$qdelete);
			
							}
									$qusers = "select * from area_master";
									$rsusers= mysqli_query($con,$qusers);
									while($rowusers = mysqli_fetch_array($rsusers)){
										echo "<option value=$rowusers[0]> $rowusers[1] </option>";
									}
								?>
                            </select>
                            <div class="mb-3">
								<br>
								<label for="exampleInputDescription1" class="form-label">Address</label>
								<p>
									<textarea rows="10" required minlength=50 cols="50" class="form-control" placeholder="Start typing an address.." name="address" required> </textarea> 
								</p>	
							<br>
                            <label for="exampleInputEmail1" class="form-label">Contact</label>
                            	<input type="text" class="form-control" id="exampleInputEmail1" pattern="/^+91(7\d|8\d|9\d)\d{9}$/" aria-describedby="contactHelp" name="contact">
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
				<thead class="table-dark">
				  <tr>
					<th scope="col">Name</th>
					<th scope="col">Email</th>
					<th scope="col">Address</th>
					<th scope="col">Contact</th>
					<th scope="col">Action</th>
				  </tr>
				</thead>
				<tbody class="table-group-divider">
				<?php
				if(isset($_GET['id'])){
					$qdelete = "delete from users where user_id="  . $_GET['id'];
					mysqli_query($con,$qdelete);

				}
					$q="Select * from users where user_type='Dealer' ";
					$rs=mysqli_query($con,$q);
					while($row=mysqli_fetch_array($rs)){
				?>

					<tr>
					<td><?php echo $row['name']; ?></td>
					<td><?php echo $row['email']; ?></td>
					<td><?php echo $row['address']; ?></td>
					<td><?php echo $row['contact']; ?></td>
				
					<td>
						<a  href="admin-dealer-edit.php?id=<?php print $row[0]?>"  class="btn btn-primary">Edit</a>	
						<a  href="admin-dealer.php?id=<?php print $row[0]?>" onclick="return confirm('Do you want to delete ?')" class="btn btn-danger">Delete</a>
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
<?php include("footer.php");
?>
