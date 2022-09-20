<?php
session_start();
include('include/header.php');
include('functions/userFunctions.php');
?>

<div class="py-3 bg-primary">
    <div class="container">
        <h6 class="text-white">Home / Collections</h6>
    </div>
</div>

<div class="container mt-3">

    <div class="container">
        <h1>Our Collections</h1>
        <hr>
        <div class="row mt-4">
            <?php
            $categories = getAllActive("categories");

            if (mysqli_num_rows($categories) > 0) {
                foreach ($categories as $item) {
            ?>
                    <div class="col-md-3 mb-2">
                        <div class="card shadow">
                            <div class="card-body">
                                <img src="uploads/<?= $item['image'] ?>" alt="<?= $item['image'] ?>" class="w-100" height="200">
                                <h4 class="text-center mt-4"><?= $item['name'] ?></h4>
                            </div>
                        </div>
                    </div>
            <?php
                }
            } else {
                echo "No Data Available";
            }
            ?>
        </div>
    </div>
</div>


<?php include('include/footer.php') ?>