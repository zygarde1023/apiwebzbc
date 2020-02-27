<?php
include ("function/apifc.php");
$id = $_GET['id'];

$data = $apis->get_single_product($id);
$categories = $apis->get_categories();
require_once 'template.php';
?>
<html>
<body>
	<div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Product Details</h4>
                    <div class="form-group">
                      <label for="exampleInputName1">Product Name</label>
                      <h3><?php echo $data['name'] ?></h3>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">Description</label>
                      <h3><?php echo $data['description'] ?></h3>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword4">Price</label>
                      <h3><?php echo $data['price'] ?></h3>
                    </div>
                    <div class="form-group">
                      <label for="exampleSelectGender">Category</label>
					  <h3><?php echo $data['category_name'] ?></h3>
                     <input type="hidden" class="form-control" name="categoryid" value="<?php echo $data['category_id'] ?>">
                      </div>
					  <input type="hidden" name="id" value="<?php echo $id ?>">
                     <a href = "index.php?view=update&id=<?php echo $id ?>">
					 <button type="button"  class="btn btn-primary mr-2">Modify</button>
					 </a>
					<a href = "process.php?action=delete&id=<?php echo $id ?>">
					<button class="btn btn-danger">Delete</button>
					</a>
                </div>
              </div>
            </div>
</body>
</html>