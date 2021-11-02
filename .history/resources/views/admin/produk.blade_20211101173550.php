@extends('admin.partials.header')
<link rel="stylesheet" href="admin/plugins/dropzone/min/dropzone.min.css">
@section('container')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Data Produk</h1>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="col-2">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-primary">
                                <i class="fas fa-plus"></i>Tambah Data
                            </button>
                            <div class="modal fade" id="modal-primary">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Tambah Transaksi</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form>
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Kategori</label>
                                                    <input type="email" class="form-control" id="exampleInputEmail1">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Nama Produk</label>
                                                    <input type="password" class="form-control" id="exampleInputPassword1">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Harga Produk</label>
                                                    <input type="password" class="form-control" id="exampleInputPassword1">
                                                </div>
                                                <div class="form-group">
                                                    <div class="card-body">
                                                        <div id="actions" class="row">
                                                            <div class="col-lg-6">
                                                                <div class="btn-group w-100">
                                                                    <span class="btn btn-success col fileinput-button">
                                                                        <i class="fas fa-plus"></i>
                                                                        <span>Add files</span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="table table-striped files" id="previews">
                                                            <div id="template" class="row mt-2">
                                                                <div class="col-auto">
                                                                    <span class="preview"><img src="data:," alt="" data-dz-thumbnail /></span>
                                                                </div>
                                                                <div class="col d-flex align-items-center">
                                                                    <p class="mb-0">
                                                                        <span class="lead" data-dz-name></span>
                                                                        (<span data-dz-size></span>)
                                                                    </p>
                                                                    <strong class="error text-danger" data-dz-errormessage></strong>
                                                                </div>
                                                                <div class="col-4 d-flex align-items-center">
                                                                    <div class="progress progress-striped active w-100" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
                                                                        <div class="progress-bar progress-bar-success" style="width:0%;" data-dz-uploadprogress></div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-auto d-flex align-items-center">
                                                                    <div class="btn-group">
                                                                        <button class="btn btn-primary start">
                                                                            <i class="fas fa-upload"></i>
                                                                            <span>Start</span>
                                                                        </button>
                                                                        <button data-dz-remove class="btn btn-warning cancel">
                                                                            <i class="fas fa-times-circle"></i>
                                                                            <span>Cancel</span>
                                                                        </button>
                                                                        <button data-dz-remove class="btn btn-danger delete">
                                                                            <i class="fas fa-trash"></i>
                                                                            <span>Delete</span>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Deskripsi</label>
                                                    <input type="password" class="form-control" id="exampleInputPassword1">
                                                </div>
                                            </div>
                                            <!-- /.card-body -->

                                            <div class="card-footer">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </form>
                                        <div class="modal-footer justify-content-between">
                                            <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-outline-light">Save changes</button>
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Kategori</th>
                                    <th>Nama Produk</th>
                                    <th>Harga Produk</th>
                                    <th>Gambar</th>
                                    <th>Deskripsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Firman Anshari Adjie</td>
                                    <td>+628788890221</td>
                                    <td>Alat</td>
                                    <td>Board</td>
                                    <td>Rp 50.000</td>
                                </tr>
                                <tr>
                                    <td>Firman Anshari Adjie</td>
                                    <td>+628788890221</td>
                                    <td>Alat</td>
                                    <td>Board</td>
                                    <td>Rp 50.000</td>
                                </tr>
                                <tr>
                                    <td>Firman Anshari Adjie</td>
                                    <td>+628788890221</td>
                                    <td>Alat</td>
                                    <td>Board</td>
                                    <td>Rp 50.000</td>
                                </tr>
                                <tr>
                                    <td>Firman Anshari Adjie</td>
                                    <td>+628788890221</td>
                                    <td>Alat</td>
                                    <td>Board</td>
                                    <td>Rp 50.000</td>
                                </tr>
                                <tr>
                                    <td>Firman Anshari Adjie</td>
                                    <td>+628788890221</td>
                                    <td>Alat</td>
                                    <td>Board</td>
                                    <td>Rp 50.000</td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Kategori</th>
                                    <th>Nama Produk</th>
                                    <th>Harga Produk</th>
                                    <th>Gambar</th>
                                    <th>Deskripsi</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>

@endsection
<script src="admin/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="admin/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="admin/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="admin/plugins/jszip/jszip.min.js"></script>
<script src="admin/plugins/pdfmake/pdfmake.min.js"></script>
<script src="admin/plugins/pdfmake/vfs_fonts.js"></script>
<script src="admin/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="admin/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="admin/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script>
    $(function() {
        $("#example1").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    });
</script>
<!-- dropzonejs -->
<script src="admin/plugins/dropzone/min/dropzone.min.js"></script>