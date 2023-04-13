<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
                            <h1 class="m-0">Data Penjualan Produk Shopcount</h1>
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
                <table class="table align-middle mb-0 table-bordered">
                    <thead>
                        <tr class="bg-secondary text-center">
                            <th>No</th>
                            <th>ID</th>
                            <th>Nama User</th>
                            <th>Email User</th>
                            <th>No Whatsapps</th>
                            <th>Alamat</th>
                            <th>Nama produk</th>
                            <th>Kategory</th>
                            <th>Harga</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
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
