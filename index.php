<?php 
session_start();
include('include/header.php') ?>
<div class="container mt-3">
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

<div class="container">
<h1>Hello User! <i class="fa fa-user"></i></h1>
<button class="btn btn-primary">Testing</button>
</div>
</div>


<?php include('include/footer.php') ?>