<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="img/logo.png">
    <title>Admin | User</title>
    @include('admin/header')
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="img/logo.png">
        </div>

        @include('admin/navbar')
        @include('admin/sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Data Pengguna Shopcount</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item">Admin</li>
                                <li class="breadcrumb-item active"><span class="small"><?php echo date('l. d M Y'); ?></span></li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <div class="ml-3 mb-2">
                <button type="button" class="btn btn-info rounded-3 btn-md text-white" data-toggle="modal"
                    data-target=".bd-example-modal-lg"><i class="fas fa-user-plus"></i>Tambah User</button>
                <!-- Modal -->
                <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog"
                    aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content p-3">
                            <form action="/datauser/store" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="inputAddress">Nama</label>
                                    <input type="text" class="form-control" id="inputAddress"
                                        placeholder="Nama Panjang" name="nama">
                                </div>

                                <div class="form-group">
                                    <label for="inputAddress3">Email</label>
                                    <input type="text" class="form-control" id="inputAddress2"
                                        placeholder="xxxx@gmail.com" name="email">
                                </div>
                                <div class="form-group">
                                    <label for="inputAddress3">Nomor what'sapp</label>
                                    <input type="tel" class="form-control" id="inputAddress3" placeholder="628...."
                                        name="no_wa" pattern="(\+62|62|0)8[1-9][0-9]{6,9}$">
                                </div>
                                <button type="submit" class="btn btn-primary">Tambah</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-body table-bordered-responsive p-0 mx-3">
                <table class="table align-middle mb-0 table-bordered display table-striped table-bordered"
                    id="example">
                    <thead>
                        <tr class="bg-secondary text-center">
                            <th>No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>No Whatsapps</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $user)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                    <p>{{ $user->nama }}</p>
                                </td>
                                <td>
                                    <p>{{ $user->email }}</p>
                                </td>
                                <td>
                                    <p>{{ $user->no_wa }}</p>
                                </td>
                                <td align="center">
                                    <form action="/datauser/{{ $user->id }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal">
                                            <i class="fas fa-trash"></i>
                                        </button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Konfirmasi
                                                            Hapus
                                                        </h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        apakah anda yakin ingin menghapus?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-danger">Yakin</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!-- /.content-wrapper -->
        @include('admin/footer')

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->
</body>

</html>
