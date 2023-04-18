<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="img/logo.png">
    <title>Shopcount || Invoice</title>
    @include('user/header')
</head>
<style>
    .button {
        font-size: 18px;
    }
</style>
@guest
    @include('user/login')
@endguest

<body>
    @auth
        @include('user/navbar')
        <main>
            <div class="text-center mt-5 p-4 ">
                <h1 class="display-8 fw-normal">INVOICE</h1>
                <p class="fs-5 text-muted">
                    Silahkan cek apakah sudah benar invoice anda, jangan lupa hubungi petugas supaya produk anda segera di
                    kirim
                </p>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="container mb-5 mt-3">

                        <hr>

                        <div class="container">
                            <div class="col-md-12">
                                <div class="text-center">
                                    <img src="img/logo.png" height="150" width="150" alt="">
                                    <h3 class="pt-0">SHOPCOUNT</h3>
                                </div>

                            </div>


                            <div class="row">
                                <div class="col-xl-8">
                                    <ul class="list-unstyled">
                                        <li class="text-muted">Dari : <span style="color:#5d9fc5 ;">Shopcount</span></li>
                                        <li class="text-muted">Trucuk, Klaten, Jawa Tengah</li>
                                        <li class="text-muted">Shopcount45@gmail.com</li>
                                        <li class="text-muted"><i class="fas fa-phone"></i> +6285921840555</li>
                                    </ul>
                                </div>
                                <div class="col-xl-4">
                                    <ul class="list-unstyled">
                                        <li class="text-muted">Untuk : <span
                                                style="color:#5d9fc5 ;">{{ $order->nama }}</span>
                                        </li>
                                        <li class="text-muted">{{ $order->email }}</li>
                                        <li class="text-muted"><i class="fas fa-phone"></i>{{ $order->no_hp }}</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="row my-2 mx-1 justify-content-center">
                                <table class="table table-striped table-borderless">
                                    <thead style="background-color:#84B0CA ;" class="text-white">
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Nama Produk</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Harga</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>{{ $order->nama_produk }}</td>
                                            <td>{{ $order->status }}</td>
                                            <td>Rp. {{ number_format($order->harga_produk) }}</td>
                                        </tr>
                                    </tbody>

                                </table>
                            </div>
                            <div class="row">
                                <div class="col-xl-8">
                                    <p class="ms-3">Tanggal {{ $order->updated_at->translatedFormat('l, d F Y : H:i') }}
                                    </p>
                                </div>
                                <div class="col-xl-3">
                                    <p class="text-black float-start"><span class="text-black me-3"> Total
                                            Harga</span><span style="font-size: 25px;">Rp.
                                            {{ number_format($order->harga_produk) }}</span></p>
                                </div>
                            </div>
                            <hr>
                            <div class="d-flex align-items-start bg-light mb-3" style="height: 100px;">
                                <div class="col p-1">
                                    <a href="/cetakinvoice{{ $order->id }}" rel="noopener" target="_blank"
                                        class="btn btn-secondary btn-sm w-100 btn-lg mt-3 button"><i
                                            class="fas fa-print"></i>
                                        Cetak</a>
                                </div>
                                <div class="col p-1">
                                    <a class="btn btn-success btn-sm w-100 btn-lg mt-3 button" target="_blank"
                                        href="https://wa.me/6285602904362?text=Halo%20penjual%20shopcouunt%20saya%20ingin%20negirim%20bukti%20pemabayaran%20terimakasih%20">
                                        <i class="fab fa-whatsapp"></i> WA
                                    </a>
                                </div>
                                <div class="col p-1"><a href="/"
                                        class="btn btn-primary btn-sm w-100 btn-lg mt-3 button">Beranda</a>
                                </div>
                            </div>
                            <div>
                                <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
                                    <h1 class="display-8 fw-normal">Testimoni</h1>
                                    <p class="fs-5 text-muted">
                                        Silahkan isi testimoni di bawah ini
                                    </p>
                                </div>
                                <form action="\" method="POST">
                                    @csrf
                                    <div>
                                        <p class="dis fw-bold mb-2">Nama</p>
                                        <input class="form-control" type="text" placeholder="Nama" name="nama">
                                    </div>
                                    <div>
                                        <p class="dis fw-bold mb-2">Rating</p>
                                        <input class="form-control" type="number" name="rating" placeholder="Nilai 1-10"
                                            min="1" max="10"
                                            oninvalid="this.setCustomValidity('Minimum rating 1, Maximal rating 10')"
                                            oninput="this.setCustomValidity('')">
                                    </div>
                                    <div>
                                        <p class="dis fw-bold mb-2">Deskripsi Penilaian</p>
                                        <textarea class="form-control" placeholder="Deskripsi penilaian" name="deskripsi"></textarea>
                                    </div>
                                    <div class="d-flex flex-column dis mt-3">
                                        <button type="button" data-bs-toggle="modal" data-bs-target="#confirmModal"
                                            class="form-control btn btn-primary submit px-3">Submit</button>
                                    </div>
                                    <div class="modal fade" id="confirmModal" tabindex="-1"
                                        aria-labelledby="confirmModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="confirmModalLabel">Informasi</h5>
                                                    <button type="button" class="btn-close btn-primary"
                                                        data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body text-danger">
                                                    Pastikan anda sudah mendowload atau mencetak invoice, karena apabila
                                                    anda menekan tanda lanjutkan maka akan menuju halaman utama website
                                                    ini
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Batal</button>
                                                    <button type="submit" class="btn btn-primary"
                                                        data-bs-dismiss="modal">lanjutkan</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="p-3">
                                <div class="alert alert-success" role="alert">
                                    <h4 class="alert-heading">Terimakasih</h4>
                                    <p>Terimakasih telah melakukan pembelian, Silahkan cetak invoice ini kemudian
                                        kirimkan bukti invoice kepada kami dan produk anda segera kami proses</p>
                                </div>
                                <div class="alert alert-danger" role="alert">
                                    <h4 class="alert-heading">Testimoni</h4>
                                    <p>Jangan lupa untuk mengisi testimoni pada form berikut, testimoni anda sangat
                                        membantu untuk penilain toko kami terimakasih.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        @include('transaksi/notif')
        @include('user/footer')
    @endauth
</body>

</html>
