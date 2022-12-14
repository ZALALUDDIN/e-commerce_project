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
            <h4 class="card-title">Add New Blog</h4>
            <?php include('message.php'); ?>
            <form class="forms-sample" method="post" action="" enctype="multipart/form-data">
              <div class="form-group">
                <div class="row">
                  <div class="col-sm-6">
                    <label for="name">Title</label>
                    <input type="text" class="form-control input-sm" id="title" name="title">
                  </div>
                  <div class="col-sm-6">
                    <label for="category_id">Category</label>
                    <select class="form-control" id="category_id" name="category_id">
                      <?php
                        $result=$mysqli->common_select('blog_category','id,category')['selectdata'];
                        foreach($result as $data){
                      ?>
                        <option value="<?= $data->id ?>"><?= $data->category ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-6">
                    <label for="description">Description</label>
                    <textarea class="form-control" name="description" id="" cols="30" rows="10"></textarea>
                  </div>
                  <div class="col-6">
                    <label for="author_name">Author Name</label>
                    <input  type="text" class="form-control" id="author_name" name="author_name">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-6">
                    <label for="tag">Tag</label>
                    <input type="text" class="form-control" id="tag" name="tag">
                  </div>
                  <div class="col-6">
                    <label for="image">Image</label>
                    <input type="file" class="form-control" id="image" name="image">
                    <small>This image should be 540 x 560</small>
                  </div>
                </div>
              </div>
              
              <button type="submit" class="btn btn-primary me-2">Submit</button>
              <button type="reset" class="btn btn-light">Cancel</button>
            </form>
            <?php
              if($_POST){
                if($_FILES['image']['name']){
                  $path_parts = pathinfo($_FILES["image"]["name"]);
                  $image_name=time().rand(1000,999).".".$path_parts['extension'];

                  $up=move_uploaded_file($_FILES['image']['tmp_name'],"images/blog/images/".$image_name);
                  if($up){
                    $_POST['image']=$image_name;
                  }
                }
             
                $result=$mysqli->common_create('blog',$_POST);
                if($result['error']){
                  $_SESSION['class']="danger";
                  $_SESSION['msg']=$result['error'];
                  echo "<script> location.replace('$base_url/blog_create.php')</script>";
                }else{
                  $_SESSION['class']="success";
                  $_SESSION['msg']=$result['msg'];
                  echo "<script> location.replace('$base_url/blog_list.php')</script>";
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