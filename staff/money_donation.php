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
        $amount_to_donate = $_POST['amount_to_donate'];
        $currency_type = $_POST['currency_type'];

        $sql = "INSERT INTO donation_table (full_name, nic, address, email, country, phone_number, occupation, message, amount_to_donate, currency_type) 
                VALUES(:full_name, :nic, :address, :email, :country, :phone_number, :occupation, :message, :amount_to_donate, :currency_type)";
        $query = $dbh->prepare($sql);
        $query->bindParam(':full_name', $full_name, PDO::PARAM_STR);
        $query->bindParam(':nic', $nic, PDO::PARAM_STR);
        $query->bindParam(':address', $address, PDO::PARAM_STR);
        $query->bindParam(':email', $email, PDO::PARAM_STR);
        $query->bindParam(':country', $country, PDO::PARAM_STR);
        $query->bindParam(':phone_number', $phone_number, PDO::PARAM_STR);
        $query->bindParam(':occupation', $occupation, PDO::PARAM_STR);
        $query->bindParam(':message', $message, PDO::PARAM_STR);
        $query->bindParam(':amount_to_donate', $amount_to_donate, PDO::PARAM_STR);
        $query->bindParam(':currency_type', $currency_type, PDO::PARAM_STR);
        $query->execute();

        if ($query->rowCount() > 0) {
            echo "<script>alert('Donation details saved successfully.');</script>";
        } else {
            echo "<script>alert('Error: Unable to save donation details.');</script>";
        }
    }
?>

<body>
    <?php include('includes/navbar.php')?>
    <?php include('includes/right_sidebar.php')?>
    <?php include('includes/left_sidebar.php')?>
    <div class="mobile-menu-overlay"></div>
    <div class="mobile-menu-overlay"></div>
    <div class="main-container">
        <div class="pb-20">
            <div class="min-height-200px">
                <div class="page-header">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="title">
                                <h4>Donation Application</h4>
                            </div>
                            <nav aria-label="breadcrumb" role="navigation">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Apply for Donation</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>

                <div style="margin-left: 50px; margin-right: 50px;" class="pd-20 card-box mb-30">
                    <div class="clearfix">
                        <div class="pull-left">
                            <h4 class="text-blue h4">Donation Form</h4>
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
                                        <h4 class="text-blue h4">Donation Details </h4>
                                        <p class="mb-20"></p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Amount you want to donate </label>
                                            <input name="amount_to_donate" type="text" class="form-control" required="true" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Currency Type :</label>
                                            <select name="currency_type" class="custom-select form-control" required="true" autocomplete="off">
                                                <option value="">Select Currency Type</option>
                                                <option value="Sri Lankan Ru">Sri Lankan Rupees</option>
                                                <option value="Dollars">Dollars</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="container-fluid">
                                    <div class="row justify-content-end">
                                        <div class="col-md-4 col-sm-12">
                                            <div class="form-group text-right">
                                                <label style="font-size: 16px;"><b></b></label>
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
