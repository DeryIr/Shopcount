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

        <div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Data Testimoni Shopcount</h1>
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
                <table class="table align-middle mb-0 display table-striped table-bordered" id="example"
                    table-bordered>
                    <thead>
                        <tr class="bg-secondary text-center">
                            <th>No</th>
                            <th>Nama</th>
                            <th>Deskripsi</th>
                            <th>Rating</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $testimoni)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                    <p>{{ $testimoni->nama }}</p>
                                </td>
                                <td>
                                    <p>{{ $testimoni->deskripsi }}</p>
                                </td>
                                <td>
                                    <p>{{ $testimoni->rating }} Dari 10</p>
                                </td>
                                <td>
                                    <p>{{ $testimoni->status }}</p>
                                </td>
                                <td align="center">
                                    <div class="d-flex justify-content-center">
                                        <div class="m-2">
                                            <a class="btn btn-info btn-sm" href="/datatestimoni/{{ $testimoni->id }}"
                                                data-bs-toggle="modal" data-bs-target="#tampil-{{ $testimoni->id }}">
                                                <i class="fas fa-check"></i>
                                            </a>

                                            <div class="modal fade" id="tampil-{{ $testimoni->id }}" tabindex="-1"
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
                                                            Apakah Anda yakin ingin menampilkan testimoni ini di halaman
                                                            testimoni?
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Tidak</button>
                                                            <a class="btn btn-info"
                                                                href="/datatestimoni/{{ $testimoni->id }}">Ya</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="m-2">
                                            <form action="/datatestimoni/{{ $testimoni->id }}" method="post">
                                                @csrf
                                                @method('delete')
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-danger btn-sm"
                                                    id="delete-{{ $testimoni->id }}" data-bs-toggle="modal"
                                                    data-bs-target="#modal-{{ $testimoni->id }}">
                                                    <i class="fas fa-trash"></i>
                                                </button>

                                                <!-- Modal -->
                                                <div class="modal fade" id="modal-{{ $testimoni->id }}" tabindex="-1"
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
                                                                Apakah anda yakin ingin menghapus testimoni ini?
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
                {{-- {{ $data->links() }} --}}
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
    @foreach ($data as $testimoni)
        $("#delete-{{ $testimoni->id }}").on("click", function() {
            $("#modal-{{ $testimoni->id }}").modal("show");
        });
    @endforeach
</script>


</html>
