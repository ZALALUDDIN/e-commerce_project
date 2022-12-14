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
            <h4 class="card-title">Role User List</h4>
            <div class="table-responsive pt-3">
            <?php include('message.php'); ?>
              <table class="table">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>User Name</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Action</th> 
                  </tr>
                </thead>
                <tbody>
                  <?php
                    $result=$mysqli->common_select('role_user');
                    if(!$result['error']){
                      foreach($result['selectdata'] as $i=>$data){
                  ?>
                        <tr>
                          <td><?= ++$i ?></td>
                          <td><?= $data->user_name ?></td>
                          <td><?= $data->email ?></td>
                          <td><?= $data->password ?></td>
                          <td>
                            <a href="<?= $base_url ?>/role_user_edit.php?id=<?= $data->id ?>" class="btn btn-info btn-sm">Edit</a>
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

