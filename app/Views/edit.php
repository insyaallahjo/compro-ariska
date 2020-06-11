<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Karir</h1>
        <!-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p> -->

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Ubah Karir</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <form action="./insertCareer" method="post">
                        <div class="form-group row">
                            <label for="title" class="col-md-1 col-form-label">Posisi</label>
                            <div class="col-md-4">
                                <input type="text" name="title" class="form-control" placeholder="Masukkan Posisi ..." value="<?= $career['title'] ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="location" class="col-md-1 col-form-label">Lokasi</label>
                            <div class="col-md-4">
                                <input type="text" name="location" class="form-control" placeholder="Masukkan Lokasi ..." value="<?= $career['location'] ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-md-1 col-form-label">Deskripsi</label>
                            <div class="col-md-11">
                                <textarea class="ckeditor" name="description" class="form-control" placeholder="Masukkan Deskripsi ..." rows="10"><?= $career['description'] ?></textarea>
                            </div>
                        </div>
                        <div class="form-group float-right">
                            <a href="<?= base_url('ariska-panel/public'); ?>/career" type="submit" class="btn btn-danger">Kembali</a>
                            <button type="submit" class="btn btn-primary">Simpan</button>
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