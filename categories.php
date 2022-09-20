<?php
session_start();
include('include/header.php') ; 
include('functions/userFunctions.php') ;

?>
<div class="container mt-3">

    <div class="container">
        <h1>Our Collections</h1>
        <?php
            $categories = getAllActive("categories");

            if(mysqli_num_rows($categories)>0){
                foreach($categories as $item) {
                    ?>
                        <h4><?=$item['name']?></h4>
                    <?php
                }
            }else{  
                echo "No Data Available";
            }
        ?>
    </div>
</div>


<?php include('include/footer.php') ?>