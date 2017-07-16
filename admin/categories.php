<?php include('includes/header.php'); ?>

<?php include('includes/top-bar.php'); ?>


<?php


$profile = $_SESSION['admindata'];

//get users of user
$categories = DB::query("SELECT * FROM tb_item_category WHERE is_active = 1");


?>


    <div id="all">

        <div id="content">
            <div class="container">

                <br>

                
                 <?php include('includes/admin-sidemenu.php'); ?>

                <div class="col-md-9" id="customer-orders">
                    <div class="box">

                        <h1>Category List</h1>
                        <a href="addcategory.php" class="btn btn-success pull-right"><i class="fa fa-plus" aria-hidden="true"></i> Add new</a>

                        <p class="lead">Listing of all item category.</p>

                        <hr>

                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Preview</th>
                                        <th>Name</th>
                                        <th>Item Count</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php foreach($categories as $key=>$category) { ?>
                                    <tr>
                                        <th><?php echo ($key + 1); ?></th>

                                        <td>
                                            <img class="thumnail" style="width:120px;height:80px" src="uploads/category/<?php echo ($category['image_url']); ?>" />  
                                        </td>
                                       
                                        <td>
                                            <?php echo ucwords($category['name']); ?>
                                        </td>

                                        <td>
                                            <?php 
                                                DB::query("SELECT * FROM tb_items WHERE item_category_id=%s", $category['id']);
                                                $counter = DB::count();
                                                echo $counter;
                                            ?>
                                        </td>
                                       
                                        <td>
                                            <a href="editcategory.php?id=<?php echo $category['id']; ?>" class="btn btn-warning btn-sm" alt="Edit"><i class="fa fa-pencil" aria-hidden="true"></i>Edit</a>
                                            <a href="deletecategory.php?id=<?php echo $category['id']; ?>" class="btn btn-danger btn-sm" alt="Delete"><i class="fa fa-times" aria-hidden="true"></i>Remove</a>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- /.col-md-9 -->


            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->
    </div>

<?php include('includes/footer.php'); ?>
 <!--give active state to navigation-->
<script type="text/javascript">
var sub_page = "categories";
$("." + sub_page).addClass("active");
</script>