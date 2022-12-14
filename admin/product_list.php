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
            <h4 class="card-title">Product List</h4>
            <div class="table-responsive pt-3">
            <?php include('message.php'); ?>
              <table class="table">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Category</th>
                    <th>Price</th>
                    <th>Image</th>
                    <th>Offered</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    $sql="select product.*,product_category.category from product join product_category on product_category.id=product.category_id";
                    $result=$mysqli->custom_select($sql);
                    if(!$result['error']){
                      foreach($result['selectdata'] as $i=>$data){
                  ?>
                        <tr>
                          <td><?= ++$i ?></td>
                          <td><?= $data->name ?></td>
                          <td><?= $data->category ?></td>
                          <td><?= $data->price ?></td>
                          <td><img src="<?= $base_url?>/images/products/thumb/<?= $data->thumb ?>" width="100px"></td>
                          <td><?= $data->offer?"Yes":"No" ?></td>
                          <td>
                            <a href="<?= $base_url ?>/product_edit.php?id=<?= $data->id ?>" class="btn btn-info btn-sm">Edit</a>
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

