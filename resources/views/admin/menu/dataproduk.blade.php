<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="img/logo.png">
    <title>Admin | Produk</title>
    @include('admin/header')
</head>
<style>
    .img-fluid {
        width: 150px;
        /* ubah ukuran sesuai kebutuhan */
        height: 100px;
        /* ubah ukuran sesuai kebutuhan */
        object-fit: cover;
    }
</style>

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
                            <h1 class="m-0">Data Produk Shopcount</h1>
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

            <div class="mb-4 p-0 mx-3">
                <button type="button" class="btn btn-info rounded-3 btn-md" data-toggle="modal"
                    data-target=".bd-example-modal-lg"><i class="fas fa-user-edit">
                    </i> Tambah Produk</button>
                <!-- Modal -->
                <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog"
                    aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content p-3">
                            <form action="/dataproduk/store" method="POST" enctype="multipart/form-data"
                                autocomplete="off">
                                @csrf
                                <div class="form-group">
                                    <label for="inputAddress">Nama Produk</label>
                                    <input type="text" class="form-control" id="inputAddress"
                                        placeholder="Name Produk" name="nama_produk" autofocus required
                                        oninvalid="this.setCustomValidity('Wajib Di Isi !!!')"
                                        oninput="this.setCustomValidity('')">
                                </div>
                                <div class="form-group">
                                    <label for="inputAddress2">Deskripsi</label>
                                    <textarea class="form-control" id="form4Example3" name="deskripsi" placeholder="Deskripsi produk"autofocus required
                                        oninvalid="this.setCustomValidity('Wajib Di Isi !!!')" oninput="this.setCustomValidity('')"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="inputAddress2">Harga</label>
                                    <input type="text" class="form-control" id="inputAddress2" placeholder="Rp.xxxx"
                                        name="harga_produk" autofocus required
                                        oninvalid="this.setCustomValidity('Wajib Di Isi !!!')"
                                        oninput="this.setCustomValidity('')">
                                </div>
                                <div>
                                    <label for="inputAddress2">Kategori</label>
                                    <div class="col-12">
                                        <select name="kategory" class="select">
                                            <option value="1">Steam</option>
                                            <option value="2">Supercell</option>
                                            <option value="3">Xbox</option>
                                            <option value="4">Epic game</option>
                                            <option value="5">Moonton</option>
                                            <option value="6">Pubgm</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="customFile">Foto Produk</label>
                                    <input type="file" class="form-control" id="customFile" accept="image/*"
                                        name="gambar" autofocus required
                                        oninvalid="this.setCustomValidity('Wajib Di Isi !!!')"
                                        oninput="this.setCustomValidity('')">
                                </div>
                                <button type="submit" class="btn btn-primary">Tambah Produk</button>
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
                            <th>Foto</th>
                            <th>Nama Produk</th>
                            <th>Deskripsi Produk</th>
                            <th>Harga Produk</th>
                            <th>Kategori</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $produk)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td align="center">
                                    <p><img src="{{ asset('img/store/' . $produk->gambar) }}" class="img-fluid"
                                            alt=""></p>
                                </td>
                                <td>
                                    <p>{{ $produk->nama_produk }}</p>
                                </td>
                                <td>
                                    <p>{!! nl2br($produk->deskripsi) !!}</p>
                                </td>
                                <td>
                                    <p>Rp. {{ number_format($produk->harga_produk) }}</p>
                                </td>
                                <td>
                                    <p>{{ $produk->kategory }}</p>
                                </td>
                                <td>
                                    <div class="d-flex justify-content-center">
                                        <div class="m-1">
                                            <button type="button" class="btn btn-info rounded-3 btn-md"
                                                data-toggle="modal"
                                                data-target=".bd-edit-modal-lg-{{ $produk->id }}"><i
                                                    class="fas fa-edit">
                                                </i></button>
                                            <!-- Modal -->
                                            <div class="modal fade bd-edit-modal-lg-{{ $produk->id }}"
                                                tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
                                                aria-hidden="true">
                                                <div class="modal-dialog modal-lg-{{ $produk->id }}">
                                                    <div class="modal-content p-3">
                                                        <form action="/dataproduk/{{ $produk->id }}" method="POST"
                                                            enctype="multipart/form-data">
                                                            @csrf
                                                            @method('put')
                                                            <div class="form-group">
                                                                <label for="inputAddress">Nama Produk</label>
                                                                <input type="text" class="form-control"
                                                                    id="inputAddress" placeholder="Nama Produk"
                                                                    name="nama_produk"
                                                                    value="{{ $produk->nama_produk }}">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="inputAddress2">Deskripsi</label>
                                                                <textarea class="form-control" id="form4Example3" name="deskripsi"><?php echo "$produk->deskripsi"; ?></textarea>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="inputAddress2">Harga</label>
                                                                <input type="text" class="form-control"
                                                                    id="inputAddress2" placeholder="Rp.xxxx"
                                                                    name="harga_produk"
                                                                    value="{{ $produk->harga_produk }}">
                                                            </div>
                                                            <div>
                                                                <label for="inputAddress2">Kategori</label>
                                                                <div class="col-12">
                                                                    <select name="kategory" class="select">
                                                                        <option value="Steam"
                                                                            @if ($produk->kategory == 'Steam') selected @endif>
                                                                            Steam</option>
                                                                        <option value="Supercell"
                                                                            @if ($produk->kategory == 'Supercell') selected @endif>
                                                                            Supercell</option>
                                                                        <option value="Xbox"
                                                                            @if ($produk->kategory == 'Xbox') selected @endif>
                                                                            Xbox</option>
                                                                        <option value="Epic_game"
                                                                            @if ($produk->kategory == 'Epic_game') selected @endif>
                                                                            Epic game</option>
                                                                        <option value="Moonton"
                                                                            @if ($produk->kategory == 'Moonton') selected @endif>
                                                                            Moonton</option>
                                                                        <option value="Pubgm"
                                                                            @if ($produk->kategory == 'Pubgm') selected @endif>
                                                                            Pubgm</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="form-label" for="customFile">Foto
                                                                    Produk</label>
                                                                @if ($produk->gambar)
                                                                    <img src="{{ asset('img/store/' . $produk->gambar) }}"
                                                                        class="img-preview img-fluid mb-3 col-sm-5 d-block">
                                                                @else
                                                                    <img class="img-preview img-fluid mb-3 col-sm-5">
                                                                @endif
                                                                <input type="file" class="form-control"
                                                                    id="customFile" accept="img/*" name="gambar"
                                                                    onchange="preview">
                                                                @if ($produk->gambar)
                                                                    <small>Gambar Terpakai:
                                                                        {{ $produk->gambar }}</small>
                                                                @endif
                                                            </div>
                                                            <button type="submit" class="btn btn-primary">Ganti
                                                                Produk</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="m-1">
                                            <form action="/dataproduk/{{ $produk->id }}" method="post">
                                                @csrf
                                                @method('delete')
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-danger rounded-3"
                                                    data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                        </div>
                                    </div>
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
