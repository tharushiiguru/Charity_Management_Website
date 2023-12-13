<?php include('includes/header.php')?>
<?php include('../includes/session.php')?>
<?php
    if (isset($_POST['apply'])) {
        $full_name = $_POST['full_name'];
        $nic = $_POST['nic'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        $country = $_POST['country'];
        $phone_number = $_POST['phone_number'];
        $occupation = $_POST['occupation'];
        $message = $_POST['message'];
        $sport_type = $_POST['sport_type'];
        $equi_name = $_POST['equi_name'];
        $deliver_method = $_POST['deliver_method'];

        $sql = "INSERT INTO Edonation_table (full_name, nic, address, email, country, phone_number, occupation, message, sport_type, equi_name, deliver_method) 
                VALUES(:full_name, :nic, :address, :email, :country, :phone_number, :occupation, :message, :sport_type, :equi_name, :deliver_method)";
        $query = $dbh->prepare($sql);
        $query->bindParam(':full_name', $full_name, PDO::PARAM_STR);
        $query->bindParam(':nic', $nic, PDO::PARAM_STR);
        $query->bindParam(':address', $address, PDO::PARAM_STR);
        $query->bindParam(':email', $email, PDO::PARAM_STR);
        $query->bindParam(':country', $country, PDO::PARAM_STR);
        $query->bindParam(':phone_number', $phone_number, PDO::PARAM_STR);
        $query->bindParam(':occupation', $occupation, PDO::PARAM_STR);
        $query->bindParam(':message', $message, PDO::PARAM_STR);
        $query->bindParam(':sport_type', $sport_type, PDO::PARAM_STR);
        $query->bindParam(':equi_name', $equi_name, PDO::PARAM_STR);
        $query->bindParam(':deliver_method', $deliver_method, PDO::PARAM_STR);
        $query->execute();

        if ($query->rowCount() > 0) {
            echo "<script>alert('Equipment donation details saved successfully.');</script>";
        } else {
            echo "<script>alert('Error: Unable to save equipment donation details.');</script>";
        }
    }
?>

<body>
    <?php include('includes/navbar.php')?>
    <?php include('includes/right_sidebar.php')?>
    <?php include('includes/left_sidebar.php')?>
    <div class="mobile-menu-overlay"></div>
    <div class="main-container">
        <div class="pb-20">
            <div class="min-height-200px">
                <div class="page-header">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="title">
                                <h4>Equipment Donation Application</h4>
                            </div>
                            <nav aria-label="breadcrumb" role="navigation">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Equipment Donation</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>

                <div style="margin-left: 50px; margin-right: 50px;" class="pd-20 card-box mb-30">
                    <div class="clearfix">
                        <div class="pull-left">
                            <h4 class="text-blue h4">Donation Details</h4>
                            <p class="mb-20"></p>
                        </div>
                    </div>
                    <div class="wizard-content">
                        <form method="post" action="">
                            <section>
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Full Name </label>
                                            <input name="full_name" type="text" class="form-control" required="true" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>NIC </label>
                                            <input name="nic" type="text" class="form-control" required="true" autocomplete="off">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Address</label>
                                            <input name="address" type="text" class="form-control" required="true" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Email Address</label>
                                            <input name="email" type="text" class="form-control" required="true" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Country</label>
                                            <input name="country" type="text" class="form-control" required="true" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Phone Number </label>
                                            <input name="phone_number" type="text" class="form-control" required="true" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Occupation</label>
                                            <input name="occupation" type="text" class="form-control" required="true" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-sm-12">
                                        <div class="form-group">
                                            <label>Any Message ? </label>
                                            <textarea id="textarea1" name="message" class="form-control" required length="150" maxlength="150" required="true" autocomplete="off"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="clearfix">
                                    <div class="pull-left">
                                        <h4 class="text-blue h4">Equipment Details </h4>
                                        <p class="mb-20"></p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Select Sport Type :</label>
                                            <select name="sport_type" class="custom-select form-control" required="true" autocomplete="off">
                                                <option value="">Select Sport </option>
                                                <option value="Cricket">Cricket</option>
                                                <option value="Football">Football</option>
                                                <option value="Volleyball">Volleyball</option>
                                                <option value="Badminton">Badminton</option>
                                                <option value="Athletics">Athletics</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-8 col-sm-12">
                                        <div class="form-group">
                                            <label>Names of Equipments </label>
                                            <textarea id="textarea1" name="equi_name" class="form-control" required length="150" maxlength="150" required="true" autocomplete="off"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8 col-sm-12">
                                    <div class="form-group">
                                        <label>How you deliver equipments to the university ? </label>
                                        <textarea id="textarea1" name="deliver_method" class="form-control" required length="150" maxlength="150" required="true" autocomplete="off"></textarea>
                                    </div>
                                </div>

                                <div class="container-fluid">
                                    <div class="row justify-content-end">
                                        <div class="col-md-4 col-sm-12">
                                            <div class="form-group text-right">
                                                <label style="font-size: 16px;"><b></b></label>
												<input type="hidden" name="apply" value="1">
                                                <button class="btn btn-primary" name="apply" id="apply" data-toggle="modal">Save</button>
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
