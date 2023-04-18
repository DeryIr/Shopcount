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
                            <h1 class="m-0">Data penjualan Shopcount</h1>
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

            <div class="card-body table-bordered-responsive p-0 mx-3">
                <table class="table align-middle mb-0 table-bordered display table-striped table-bordered"
                    id="example">
                    <thead>
                        <tr class="bg-secondary text-center">
                            <th>No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>No Whatsapps</th>
                            <th>Nama produk</th>
                            <th>Harga</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $penjualan)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                    <p>{{ $penjualan->nama }}</p>
                                </td>
                                <td>
                                    <p>{{ $penjualan->email }}</p>
                                </td>
                                <td>
                                    <p>{{ $penjualan->no_hp }}</p>
                                </td>
                                <td>
                                    <p>{{ $penjualan->nama_produk }}</p>
                                </td>
                                <td>
                                    <p>Rp. {{ number_format($penjualan->harga_produk) }}</p>
                                </td>
                                <td>
                                    <p>{{ $penjualan->status }}</p>
                                </td>
                                <td align="center">
                                    <div class="d-flex justify-content-center">
                                        <div class="m-2">
                                            <a class="btn btn-info btn-sm" href="/datapenjualan/{{ $penjualan->id }}"
                                                data-bs-toggle="modal" data-bs-target="#lunas-{{ $penjualan->id }}">
                                                <i class="fas fa-check"></i>
                                            </a>

                                            <div class="modal fade" id="lunas-{{ $penjualan->id }}" tabindex="-1"
                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Konfirmasi
                                                            </h5>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            Apakah Anda yakin ingin mengganti pembayaran menjadi lunas,
                                                            Pastikan sudah ada bukti pembayaran ?
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Tidak</button>
                                                            <a class="btn btn-info"
                                                                href="/datapenjualan/{{ $penjualan->id }}">Ya</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="m-2">
                                            <form action="/datapenjualan/{{ $penjualan->id }}" method="post">
                                                @csrf
                                                @method('delete')
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-danger btn-sm"
                                                    id="delete-{{ $penjualan->id }}" data-bs-toggle="modal"
                                                    data-bs-target="#hapus-{{ $penjualan->id }}">
                                                    <i class="fas fa-trash"></i>
                                                </button>

                                                <!-- Modal -->
                                                <div class="modal fade" id="hapus-{{ $penjualan->id }}" tabindex="-1"
                                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h1 class="modal-title fs-5" id="exampleModalLabel">
                                                                    Konfirmasi Hapus</h1>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                Apakah anda yakin ingin menghapus data penjualan ini?
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-bs-dismiss="modal">Close
                                                                </button>
                                                                <button type="submit"
                                                                    class="btn btn-danger">Yakin</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
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
<script>
    @foreach ($data as $penjualan)
        $("#delete-{{ $penjualan->id }}").on("click", function() {
            $("#modal-{{ $penjualan->id }}").modal("show");
        });
    @endforeach
</script>

</html>
