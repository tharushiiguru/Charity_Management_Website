<?php include('includes/header.php')?>
<?php include('../includes/session.php')?>
<?php
	if(isset($_POST['add_staff']))
	{
	
	$fname=$_POST['firstname'];
	$lname=$_POST['lastname'];   
	$email=$_POST['email'];
	$epf_no=$_POST['epf_no'];
	$app_date=date_create($_POST['appointment_date'])->format("Y-m-d"); 
	$password=md5($_POST['password']); 
	$gender=$_POST['gender']; 
	$dob=$_POST['dob']; 
	// $department=$_POST['department']; 
	$address=$_POST['address']; 
	$leave_days="30"; 
	$user_role=$_POST['user_role']; 
	$phonenumber=$_POST['phonenumber'];

	$status=1;

	 $query = mysqli_query($conn,"select * from tbldonor where EmailId = '$email'")or die(mysqli_error());
	 $count = mysqli_num_rows($query);
     
     if ($count > 0){ ?>
	 <script>
	 alert('Data Already Exist');
	</script>
	<?php
      }else{
        mysqli_query($conn,"INSERT INTO tbldonor(FirstName,LastName,EmailId,Password,Gender,Dob,Department,Address,Av_leave,role,Phonenumber,Status, location,appointment_date,epf_no) VALUES('$fname','$lname','$email','$password','$gender','$dob','$department','$address','$leave_days','$user_role','$phonenumber','$status', 'NO-IMAGE-AVAILABLE.jpg', '$app_date', '$epf_no')         
		") or die(mysqli_error()); ?>
		<script>alert('Donor Records Successfully  Added');</script>;
		<script>
		window.location = "admin_dashboard.php"; 
		</script>
		<?php   }
}

?>

<body>

	<?php include('includes/navbar.php')?>

	<?php include('includes/right_sidebar.php')?>

	<?php include('includes/left_sidebar.php')?>

	<div class="mobile-menu-overlay"></div>

	<div class="mobile-menu-overlay"></div>

	<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>Donor Portal</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
									<li class="breadcrumb-item active" aria-current="page">Donor</li>
								</ol>
							</nav>
						</div>
					</div>
				</div>

				<div class="pd-20 card-box mb-30">
					<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-blue h4">Donor Form</h4>
							<p class="mb-20"></p>
						</div>
					</div>
					<div class="wizard-content">
						<form method="post" action="">
							<section>
								<div class="row">
									<div class="col-md-4 col-sm-12">
										<div class="form-group">
											<label >First Name :</label>
											<input name="firstname" type="text" class="form-control wizard-required" required="true" autocomplete="off">
										</div>
									</div>
									<div class="col-md-4 col-sm-12">
										<div class="form-group">
											<label >Last Name :</label>
											<input name="lastname" type="text" class="form-control" required="true" autocomplete="off">
										</div>
									</div>

									<div class="col-md-4 col-sm-12">
										<div class="form-group">
											<label >Date  :</label>
											<input name="appointment_date" type="text" class="form-control date-picker" required="true" autocomplete="off">
										</div>
									</div>

									<div class="col-md-4 col-sm-12">
										<div class="form-group">
											<label > Occupation :</label>
											<input name="epf_no" type="text" class="form-control" required="true" autocomplete="off">
										</div>
									</div>
									<div class="col-md-4 col-sm-12">
										<div class="form-group">
											<label>Email Address :</label>
											<input name="email" type="email" class="form-control" required="true" autocomplete="off">
										</div>
									</div>
									<div class="col-md-4 col-sm-12">
										<div class="form-group">
											<label>Password :</label>
											<input name="password" type="password" placeholder="**********" class="form-control" required="true" autocomplete="off">
										</div>
									</div>
								</div>
								<div class="row">
									
									<div class="col-md-4 col-sm-12">
										<div class="form-group">
											<label>Gender :</label>
											<select name="gender" class="custom-select form-control" required="true" autocomplete="off">
												<option value="">Select Gender</option>
												<option value="male">Male</option>
												<option value="female">Female</option>
											</select>
										</div>
									</div>
									<div class="col-md-4 col-sm-12">
										<div class="form-group">
											<label>Phone Number :</label>
											<input name="phonenumber" type="text" class="form-control" required="true" autocomplete="off">
										</div>
									</div>
									<div class="col-md-4 col-sm-12">
										<div class="form-group">
											<label>Date Of Birth :</label>
											<input name="dob" type="text" class="form-control date-picker" required="true" autocomplete="off">
										</div>
									</div>
								</div>
								<div class="row">
									
									<div class="col-md-4 col-sm-12">
										<div class="form-group">
											<label>Address :</label>
											<input name="address" type="text" class="form-control" required="true" autocomplete="off">
										</div>
									</div>
									
									<div class="col-md-4 col-sm-12">
										<div class="form-group">
											<label>User Type :</label>
											<select name="user_role" class="custom-select form-control" required="true" autocomplete="off">
												<option value="">Select Type</option>
												<option value="Admin">Admin</option>
												<option value="Staff">Donor</option>
											</select>
										</div>
									</div>
								</div>

								

								
									
									

								<div class="container-fluid">
                                    <div class="row justify-content-end">
                                        <div class="col-md-4 col-sm-12">
                                            <div class="form-group text-right">
                                                <label style="font-size: 16px;"><b></b></label>
												
                                                <button class="btn btn-primary" name="add_staff" id="add_staff" data-toggle="modal">Add&nbsp;Donor</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
								
							</section>
						</form>
					</div>
				</div>

			</div>
			<?php include('includes/footer.php'); ?>
		</div>
	</div>
	<!-- js -->
	<?php include('includes/scripts.php')?>
</body>
</html>