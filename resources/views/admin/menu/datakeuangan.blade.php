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
                            <h1 class="m-0">Data Keuangan Shopcount</h1>
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
                            <th>Status</th>
                            <th>Harga</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $keuangan)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                    <p>{{ $keuangan->nama }}</p>
                                </td>
                                <td>
                                    <p>{{ $keuangan->email }}</p>
                                </td>
                                <td>
                                    <p>{{ $keuangan->no_hp }}</p>
                                </td>
                                <td>
                                    <p>{{ $keuangan->nama_produk }}</p>
                                </td>
                                <td>
                                    <p>{{ $keuangan->status }}</p>
                                </td>
                                <td>
                                    <p>Rp. {{ number_format($keuangan->harga_produk) }}</p>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th colspan="6" style="text-align:right">Total:</th>
                            <th colspan="1">Rp {{ number_format($total_harga) }}
                            </th>
                        </tr>
                    </tfoot>
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
