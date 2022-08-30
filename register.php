<?php
session_start();

if(isset($_SESSION['auth'])){
    $_SESSION['message']="You are Already Logged In";
    header('Location: index.php');
    exit();
}

include('include/header.php');
?>
<div class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <?php
                if (isset($_SESSION["message"])) {
                ?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>Hey!!</strong> <?php echo $_SESSION["message"]; ?>.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php
                    unset($_SESSION['message']);
                }
                ?>
                <div class="card">
                    <div class="card-header">
                        <h3>Registration Form</h3>
                    </div>
                    <div class="card-body">
                        <form action="functions/authcode.php" method="POST">
                            <div class="mb-3">
                                <label class="form-label">Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Enter Your Name">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Phone</label>
                                <input type="text" name="phone" class="form-control" placeholder="Enter Phone Number">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Email address</label>
                                <input type="email" name="email" class="form-control" placeholder="Enter Your Email">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Enter Password">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Confirm Password</label>
                                <input type="password" name="cpassword" class="form-control" placeholder="Enter Confirm Password">
                            </div>
                            <button type="submit" name="register_btn" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>



<?php include('include/footer.php') ?>