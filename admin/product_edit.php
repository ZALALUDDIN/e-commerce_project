<?php 
  require_once('include/header.php');
  require_once('include/top_bar.php');
  require_once('include/side_bar.php');
?>

<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Update Product</h4>
            <?php include('message.php'); ?>
            <?php
              $id=$_GET['id'];
              $where['id']=$id;
              $product=$mysqli->common_select_single('product','*',$where)['selectdata'];
            ?>
            <form class="forms-sample" method="post" action="" enctype="multipart/form-data">
              <div class="form-group">
                <div class="row">
                  <div class="col-sm-6">
                    <label for="name">Product Name</label>
                    <input type="text" value="<?= $product->name ?>" class="form-control input-sm" id="name" name="name">
                  </div>
                  <div class="col-sm-6">
                    <label for="category_id">Category</label>
                    <select class="form-control" id="category_id" name="category_id">
                      <?php
                        $result=$mysqli->common_select('product_category','id,category')['selectdata'];
                        foreach($result as $data){
                      ?>
                        <option <?= $product->category_id==$data->id?"select":"" ?> value="<?= $data->id ?>"><?= $data->category ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-6">
                    <label for="price">Product Price</label>
                    <input type="text" value="<?= $product->price ?>" class="form-control" id="price" name="price">
                  </div>
                  <div class="col-6">
                    <label for="discount">Product Discount</label>
                    <input type="text" value="<?= $product->discount ?>" class="form-control" id="discount" name="discount">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-6">
                    <label for="desc_short">Product Description Short</label>
                    <input type="text" value="<?= $product->desc_short ?>" class="form-control" id="desc_short" name="desc_short">
                  </div>
                  <div class="col-6">
                    <label for="shipping">Product Shipping</label>
                    <input type="text" value="<?= $product->shipping ?>" class="form-control" id="shipping" name="shipping">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-6">
                    <label for="desc_long">Product Description</label>
                    <textarea class="form-control" id="desc_long" name="desc_long"><?= $product->desc_long ?></textarea>
                  </div>
                  <div class="col-6">
                    <label for="information">Product Information</label>
                    <textarea class="form-control" id="information" name="information"><?= $product->desc_long ?></textarea>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-6">
                    <label for="image">Product Image</label>
                    <input type="file" class="form-control" id="image" name="image">
                    <small>This image should be 540 x 560</small>
                  </div>
                  <div class="col-6">
                    <label for="thumb">Product Thumbnile</label>
                    <input type="file" class="form-control" id="thumb" name="thumb">
                    <small>This image should be 270 x 270</small>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-3">
                    <label for="weight">Product Weight</label>
                    <input type="text" value="<?= $product->weight ?>" class="form-control" id="weight" name="weight">
                  </div>
                  <div class="col-3">
                    <label for="qty">Product Quentity</label>
                    <input type="text" value="<?= $product->qty ?>" class="form-control" id="qty" name="qty">
                  </div>
                  <div class="col-3">
                    <label for="ratings">Product Ratings</label>
                    <input type="text" value="<?= $product->ratings ?>" class="form-control" id="ratings" name="ratings">
                  </div>
                  <div class="col-3">
                    <label for="status">Product Status</label>
                    <select class="form-control" id="status" name="status">
                      <option value="1" <?= $product->status==1?"selected":"" ?>>Active</option>
                      <option value="0" <?= $product->status==0?"selected":"" ?>>Inactive</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-3">
                    <label for="latest_products">Is Latest</label>
                    <select class="form-control" id="latest_products" name="latest_products">
                      <option value="0" <?= $product->latest_products==0?"selected":"" ?>>No</option>
                      <option value="1" <?= $product->latest_products==1?"selected":"" ?>>Yes</option>
                    </select>
                  </div>
                  <div class="col-3">
                    <label for="top_rated_products">Is Top Rated</label>
                    <select class="form-control" id="top_rated_products" name="top_rated_products">
                      <option value="0" <?= $product->top_rated_products==0?"selected":"" ?>>No</option>
                      <option value="1" <?= $product->top_rated_products==1?"selected":"" ?>>Yes</option>
                    </select>
                  </div>
                  <div class="col-3">
                    <label for="offer">Is Offered</label>
                    <select class="form-control" id="offer" name="offer">
                      <option value="0" <?= $product->offer==0?"selected":"" ?>>No</option>
                      <option value="1" <?= $product->offer==1?"selected":"" ?>>Yes</option>
                    </select>
                  </div>
                  <div class="col-3">
                    <label for="review_products">Is Reviewed</label>
                    <select class="form-control" id="review_products" name="review_products">
                      <option value="0" <?= $product->review_products==0?"selected":"" ?>>No</option>
                      <option value="1" <?= $product->review_products==1?"selected":"" ?>>Yes</option>
                    </select>
                  </div>
                </div>
                
              </div>
              <button type="submit" class="btn btn-primary me-2">Submit</button>
              <button class="btn btn-light">Cancel</button>
            </form>
            <?php
              if($_POST){
                if($_FILES['image']['name']){
                  $path_parts = pathinfo($_FILES["image"]["name"]);
                  $image_name=time().rand(1000,999).".".$path_parts['extension'];

                  $up=move_uploaded_file($_FILES['image']['tmp_name'],"images/products/images/".$image_name);
                  if($up){
                    $_POST['image']=$image_name;
                  }
                }
                if($_FILES['thumb']['name']){
                  $path_parts = pathinfo($_FILES["thumb"]["name"]);
                  $thumb_name=time().rand(1000,999).".".$path_parts['extension'];

                  $up=move_uploaded_file($_FILES['thumb']['tmp_name'],"images/products/thumb/".$thumb_name);
                  if($up){
                    $_POST['thumb']=$thumb_name;
                  }
                }

                $result=$mysqli->common_update('product',$_POST,$where);
                if($result['error']){
                  $_SESSION['class']="danger";
                  $_SESSION['msg']=$result['error'];
                  echo "<script> location.replace('$base_url/product_update.php?id=$id')</script>";
                }else{
                  $_SESSION['class']="success";
                  $_SESSION['msg']=$result['msg'];
                  echo "<script> location.replace('$base_url/product_list.php')</script>";
                }
              }

              ?>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php 
    require_once('include/footer.php');
  ?>
</div>