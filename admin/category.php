<?php
include('include/header.php');
include('../middleware/adminMiddleware.php');
?>

<div class="container">
    <div class="row">
    <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Categories</h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $category=getAll('categories');
                                if(mysqli_num_rows($category)>0){
                                    foreach($category as $item){
                                        ?>
                                    <tr>
                                        <td><?=$item['id']?></td>
                                        <td><?=$item['name']?></td>
                                        <td><img src="../uploads/<?=$item['name'];?>.png" alt="<?=$item['name']?>" height="50"></td>
                                        <td><?=$item['status']=='0'?"Visible":"Hidden" ?></td>
                                        <td><a href="#" class="btn btn-primary">Edit</a></td>
                                    </tr>
                                        <?php
                                    }
                                }else{
                                    echo "No Record Found";
                                }
                            ?>
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>

<?php include('include/footer.php') ?>