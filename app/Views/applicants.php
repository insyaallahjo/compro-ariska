<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Pelamar</h1>
        <!-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p> -->

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">List Pelamar</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama Lengkap</th>
                                <th scope="col">Email</th>
                                <th scope="col">Telepon</th>
                                <th scope="col">Posisi</th>
                                <th scope="col">Doc</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if ($applicants) : ?>
                                <?php $i = 1; ?>
                                <?php foreach ($applicants as $key => $value) : ?>
                                    <tr>
                                        <th scope="row"><?= $i ?></th>
                                        <td><?= $value['full_name'] ?></td>
                                        <td><?= $value['email'] ?></td>
                                        <td><?= $value['hp'] ?></td>
                                        <td><?= $value['position'] ?></td>
                                        <td><?= $value['doc'] ?></td>
                                        <td><?= $value['title'] ?></td>
                                        <td>
                                            <h6 class="m-0 font-weight-bold text-success">
                                                <!-- <a href="./applicant/edit/<?= $applicant['id'] ?>" class="text-warning text-decoration-none"><i class="fas fa-fw fa-pencil-alt text-warning"></i> Ubah</a>
                                                &nbsp;&nbsp; -->
                                                <a href="./applicant/delete/<?= $value['id'] ?>" class="text-danger text-decoration-none"><i class="fas fa-fw fa-trash-alt text-danger"></i> Hapus</a>
                                            </h6>
                                        </td>
                                    </tr>
                                    <?php $i++ ?>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->