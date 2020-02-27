<?php
include ("function/apifc.php");
$categories = $apis->get_categories();
require_once 'template.php';
?>
<html>
<body>
	<div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Create Product</h4>
                  <form class="forms-sample" action="process.php?action=create" method="POST">
                    <div class="form-group">
                      <label for="exampleInputName1">Product Name</label>
                      <input type="text" class="form-control" name="name" placeholder="name">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">Description</label>
                      <input type="text" class="form-control" name="description" placeholder="description">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword4">Price</label>
                      <input type="text" class="form-control" name="price" placeholder="price">
                    </div>
                    <div class="form-group">
                      <label for="exampleSelectGender">Category</label>
                        <select name ="category" class="form-control" id="exampleSelectGender">
                        <?php foreach ($categories as $category) { ?>
                                <option value="<?php echo $category['id'] ?>"><?php echo $category['name'] ?></option>
                        <?php } ?>
                        </select>
                      </div>
                     <button type="submit" name = "submit" class="btn btn-primary mr-2">Submit</button>
                    <button class="btn btn-light" href = "api/index.php">Cancel</button>
                  </form>
                </div>
              </div>
            </div>
</body>
</html>