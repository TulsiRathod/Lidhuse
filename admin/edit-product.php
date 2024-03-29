<?php
include('include/header.php');
include('../middleware/adminMiddleware.php');
?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <?php
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $product = getByID("products", $id);
                if (mysqli_num_rows($product) > 0) {
                    $data = mysqli_fetch_array($product);
            ?>
                    <div class="card">
                        <div class="card-header">
                            <h4>Edit Product<a href="product.php" class="btn btn-primary float-end">Back</a></h4>
                        </div>
                        <div class="card-body">
                            <form action="code.php" method="POST" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-md-12+">
                                        <label for="">Select Category</label>
                                        <select class="form-select" name="category_id">
                                            <option selected>Select Category</option>
                                            <?php
                                            $categories = getAll("categories");
                                            if (mysqli_num_rows($categories) > 0) {
                                                foreach ($categories as $item) {
                                            ?>
                                                    <option value="<?= $item['id'] ?>" <?= $data['category_id'] == $item['id'] ? 'selected' : '' ?>><?= $item['name'] ?></option>
                                            <?php
                                                }
                                            } else {
                                                echo "No Category available";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="">Name</label>
                                        <input type="text" name="name" value="<?=$data['name'] ?>" placeholder="Enter Category Name" class="form-control">
                                    </div>
                                    <input type="hidden" name="product_id" value="<?=$data['id']?>">
                                    <div class="col-md-6">
                                        <label for="">Slug</label>
                                        <input type="text" name="slug" value="<?=$data['slug'] ?>" placeholder="Enter slug" class="form-control">
                                    </div>
                                    <div class="col-md-12">
                                        <label for="">Small Description</label>
                                        <textarea rows="3" name="small_description" placeholder="Enter Small Description" class="form-control"><?=$data['small_description'] ?></textarea>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="">Description</label>
                                        <textarea rows="3" name="description" placeholder="Enter Description" class="form-control"><?=$data['description'] ?></textarea>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="">Original Price</label>
                                        <input type="text" name="original_price" value="<?=$data['original_price'] ?>" placeholder="Enter Original Price" class="form-control">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="">Selling Price</label>
                                        <input type="text" name="selling_price" value="<?=$data['selling_price'] ?>" placeholder="Enter Selling Price" class="form-control">
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-md-6">
                                            <label for="">Quantity</label><br />
                                            <input type="text" name="qty" value="<?=$data['qty'] ?>" required placeholder="Enter Quantity" class="form-control">
                                        </div>
                                        <div class="col-md-3">
                                            <label for="">Status</label>
                                            <input type="checkbox" name="status" <?=$data['status']?'checked':''?>>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="">Trending</label>
                                            <input type="checkbox" name="trending" <?=$data['trending']?'checked':''?>>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                    <label for="">Upload Image</label>
                                        <input type="file" name="image" class="form-control">
                                        <label for="">Current Image</label>
                                        <input type="hidden" name="old_image" value="<?=$data['image']?>">
                                        <img src="../uploads/<?=$data['image']?>" class="mt-2" height="50" width="50" alt="<?=$data['image'] ?>">
                                    </div>
                                    <div class="col-md-12">
                                        <label for="">Meta Title</label>
                                        <input type="text" name="meta_title" value="<?=$data['meta_title'] ?>" placeholder="Enter Meta Title" class="form-control">
                                    </div>
                                    <div class="col-md-12">
                                        <label for="">Meta Description</label>
                                        <textarea rows="3" name="meta_description" placeholder="Enter Meta Description" class="form-control"><?=$data['meta_description'] ?></textarea>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="">Meta Keywords</label>
                                        <textarea rows="3" name="meta_keywords" placeholder="Enter Meta Keywords" class="form-control"><?=$data['meta_keywords'] ?></textarea>
                                    </div>

                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary mt-3" name="update_product_btn">Save</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                <?php
                } else {
                    echo "Product Not Found From ID";
                }
                ?>
            <?php
            } else {
                echo "ID Missing From URL";
            }
            ?>
        </div>
    </div>
</div>
<?php include('include/footer.php') ?>