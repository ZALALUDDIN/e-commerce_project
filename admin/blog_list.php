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
            <h4 class="card-title">Blog List</h4>
            <div class="table-responsive pt-3">
            <?php include('message.php'); ?>
              <table class="table">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Category</th>
                    <th>Description</th>
                    <th>Author Name</th>
                    <th>Tag</th>
                    <th>Image</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    $sql="select blog.*,blog_category.category from blog join blog_category on blog_category.id=blog.category_id";
                    $result=$mysqli->custom_select($sql);
                    if(!$result['error']){
                      foreach($result['selectdata'] as $i=>$data){
                  ?>
                        <tr>
                          <td><?= ++$i ?></td>
                          <td><?= $data->title ?></td>
                          <td><?= $data->category_id ?></td>
                          <td><?= $data->description ?></td>
                          <td><?= $data->author_name ?></td>
                          <td><?= $data->tag ?></td>
                          <td><?= $data->image ?></td>
                          <td><img src="<?= $base_url?>/images/blog/images/<?= $data->image ?>" width="100px"></td>
                          <td>
                            <a href="<?= $base_url ?>/blog_edit.php?id=<?= $data->id ?>" class="btn btn-info btn-sm">Edit</a>
                          </td>
                        </tr>
                  <?php } } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php 
    require_once('include/footer.php');
  ?>
</div>

