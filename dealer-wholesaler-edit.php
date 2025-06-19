
<?php include("vheader.php");?>
<?php include("dealermenu.php");?>
<?php
	include("connection.php");

    $user_id=$_GET['id'];
	$q="select * from users where user_id=$user_id";
	$rs=mysqli_query($con,$q);
	$row=mysqli_fetch_array($rs);

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
					<li>Edit Wholesaler</li>
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
				<span>E</span>dit
                <span>W</span>holesaler
			</h3>
			
			<!-- form -->
			<form action="dealer-wholesaler-edit-code.php" method="post">
			
					<div class="mb-3">
                    <input type="hidden" class="form-control" value="<?php print $row['user_id']?>" id="exampleInputEmail1" name="user_id" aria-describedby="emailHelp">
				
					  <label for="exampleInputEmail1" class="form-label">Name</label>
					  <input type="text"  required minlength=3 required maxlength="50" class="form-control"value="<?php print $row['name']?>" id="exampleInputEmail1" aria-describedby="nameHelp" name="name">
					</div>
					<br>
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="email" pattern="[^ @]*@[^ @]*" class="form-control"value="<?php print $row['email']?>" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
					<br>
                    <label for="exampleInputEmail1" class="form-label">Password</label>        
                     <br>
                    <input type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"  class="form-control" value="<?php print $row['password']?>"id="exampleInputEmail1" aria-describedby="passwordHelp" name="password" required>
					<br>
					<div class="dropdown">
						<label for="exampleInputDropdown1" class="form-label">Area</label>
						<br>
                            <select aria-describedby="areaHelp" value="<?php print $row['area_id']?>"name="area_id" class="form-control">
							<?php 
									$qusers = "select * from area_master";
									$rsusers= mysqli_query($con,$qusers);
									while($rowusers = mysqli_fetch_array($rsusers)){
										echo "<option value=$rowusers[0]> $rowusers[1] </option>";
									}
								?>
                            </select>
							<br>
                            <div class="mb-3">
								<br>
								<label for="exampleInputDescription1" class="form-label">Address</label>
								<p>
									<textarea rows="10" cols="50" required minlength=50 class="form-control" value="<?php print $row['address']?>" aria-describedby="addressHelp" placeholder="Start typing an address.." name="address"> </textarea> 
								</p>	
							<br>
                            <label for="exampleInputEmail1" class="form-label">Contact</label>
                            <input type="text" class="form-control" pattern="/^+91(7\d|8\d|9\d)\d{9}$/" id="exampleInputEmail1" value="<?php print $row['contact']?>"aria-describedby="contactHelp" name="contact">
						</div>
						<br>
					<button type="submit" class="btn btn-primary">Submit</button>
				  
			</form>
			<!-- //form -->


		</div>
	</div>
	<!-- //form part -->

<?php include("footer.php");
?>
