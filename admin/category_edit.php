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
            <h4 class="card-title">Category Update</h4>
            <?php include('message.php'); ?>
            <?php
              $id=$_GET['id'];
              $where['id']=$id;
              $result=$mysqli->common_select_single('product_category','*',$where)['selectdata'];
            ?>
            <form class="forms-sample" method="post" action="" enctype="multipart/form-data">
              <div class="form-group">
                <label for="category">Category</label>
                <input value="<?= $result->category ?>" type="text" class="form-control" id="category" name="category">
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-6">
                    <label for="banner">Category Banner</label>
                    <input type="file" class="form-control" id="banner" name="banner">
                    <small>Image size should be 1920 X 190 px</small>
                  </div>
                  <div class="col-6">
                    <label for="image">Category Image</label>
                    <input type="file" class="form-control" id="image" name="image">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="show_home">Show Home?</label>
                <select class="form-control" id="show_home" name="show_home">
                  <option value="0" <?= $result->show_home==0?"selected":"" ?>>No</option>
                  <option value="1" <?= $result->show_home==1?"selected":"" ?>>Yes</option>
                </select>
              </div>
              <button type="submit" class="btn btn-primary me-2">Submit</button>
              <button class="btn btn-light">Cancel</button>
            </form>
            <?php
              if($_POST){
                if($_FILES['image']['name']){
                  $path_parts = pathinfo($_FILES["image"]["name"]);
                  $image_name=time().rand(1000,999).".".$path_parts['extension'];

                  $up=move_uploaded_file($_FILES['image']['tmp_name'],"images/category/".$image_name);
                  if($up){
                    $_POST['image']=$image_name;
                  }
                }
                if($_FILES['banner']['name']){
                  $path_parts = pathinfo($_FILES["banner"]["name"]);
                  $banner_name=time().rand(1000,999).".".$path_parts['extension'];

                  $up=move_uploaded_file($_FILES['banner']['tmp_name'],"images/category/".$banner_name);
                  if($up){
                    $_POST['banner']=$banner_name;
                  }
                }

                $upwhere['id']=$id;
                $result=$mysqli->common_update('product_category',$_POST,$upwhere);
                if($result['error']){
                  $_SESSION['class']="danger";
                  $_SESSION['msg']=$result['error'];
                  echo "<script> location.replace('$base_url/category_create.php')</script>";
                }else{
                  $_SESSION['class']="success";
                  $_SESSION['msg']=$result['msg'];
                  echo "<script> location.replace('$base_url/category_list.php')</script>";
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