<!-- Page Wrapper -->
<div id="wrapper">

  <!-- Begin Page Content -->
  <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Update Profile</h1>
    <!-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p> -->

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary"><?= $users['first_name'] . ' ' . $users['last_name'] ?></h6>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <?php if (session()->get('success')) : ?>
            <div class="alert alert-success" role="alert">
              <?= session()->get('success') ?>
            </div>
          <?php endif; ?>
          <form class="" action="./profile" method="post">
            <div class="row">
              <div class="col-12 col-sm-6">
                <div class="form-group">
                  <label for="first_name">First Name</label>
                  <input type="text" class="form-control" name="first_name" id="first_name" value="<?= set_value('first_name', $users['first_name']) ?>">
                </div>
              </div>
              <div class="col-12 col-sm-6">
                <div class="form-group">
                  <label for="last_name">Last Name</label>
                  <input type="text" class="form-control" name="last_name" id="last_name" value="<?= set_value('last_name', $users['last_name']) ?>">
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  <label for="email">Email address</label>
                  <input type="text" class="form-control" readonly id="email" value="<?= $users['email'] ?>">
                </div>
              </div>
              <div class="col-12 col-sm-6">
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" name="password" id="password" value="">
                </div>
              </div>
              <div class="col-12 col-sm-6">
                <div class="form-group">
                  <label for="password_confirm">Confirm Password</label>
                  <input type="password" class="form-control" name="password_confirm" id="password_confirm" value="">
                </div>
              </div>
              <?php if (isset($validation)) : ?>
                <div class="col-12">
                  <div class="alert alert-danger" role="alert">
                    <?= $validation->listErrors() ?>
                  </div>
                </div>
              <?php endif; ?>
            </div>

            <div class="row">
              <div class="col-12 col-sm-4">
                <button type="submit" class="btn btn-primary">Update</button>
              </div>

            </div>
          </form>
        </div>
      </div>
    </div>

  </div>
  <!-- /.container-fluid -->

  <!-- <textarea class="ckeditor" id="ckeditor" name="ckeditor"></textarea> -->

</div>
<!-- End of Main Content -->