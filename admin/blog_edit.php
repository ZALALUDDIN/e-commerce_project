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
            <h4 class="card-title">Update Blog</h4>
            <?php include('message.php'); ?>
            <?php
              $id=$_GET['id'];
              $where['id']=$id;
              $blog=$mysqli->common_select_single('blog','*',$where)['selectdata'];
            ?>
            <form class="forms-sample" method="post" action="" enctype="multipart/form-data">
              <div class="form-group">
                <div class="row">
                  <div class="col-sm-6">
                    <label for="title">Title Name</label>
                    <input type="text" value="<?= $blog->title ?>" class="form-control input-sm" id="title" name="title">
                  </div>
                  <div class="col-sm-6">
                    <label for="category_id">Category</label>
                    <select class="form-control" id="category_id" name="category_id">
                      <?php
                        $result=$mysqli->common_select('blog_category','id,category')['selectdata'];
                        foreach($result as $data){
                      ?>
                        <option <?= $blog->category_id==$data->id?"select":"" ?> value="<?= $data->id ?>"><?= $data->category ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-6">
                    <label for="description">Description</label>
                    <input type="text" value="<?= $blog->description ?>" class="form-control" id="description" name="description">
                  </div>
                  <div class="col-6">
                    <label for="author_name">Author Name</label>
                    <input type="text" value="<?= $blog->author_name ?>" class="form-control" id="author_name" name="author_name">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-6">
                    <label for="tag">Tag</label>
                    <input type="text" value="<?= $blog->tag ?>" class="form-control" id="tag" name="tag">
                  </div>
                  <div class="col-6">
                    <label for="image">Image</label>
                    <input type="file" value="<?= $blog->image ?>" class="form-control" id="image" name="image">
                  </div>
                </div>
              </div>

              <button type="submit" class="btn btn-primary me-2">Submit</button>
              <button type="reset" class="btn btn-light">Cancel</button>
            </form>
            <?php
            
                
			if($_POST){
               $upwhere['id']=$id;
                $result=$mysqli->common_update('blog_category',$_POST,$upwhere);
                if($result['error']){
                  $_SESSION['class']="danger";
                  $_SESSION['msg']=$result['error'];
                  echo "<script> location.replace('$base_url/blog_edit.php?id=$id')</script>";
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