<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="img/logo.png">
    <title>Deskripsi Produk</title>
    @include('user/header')
</head>
<style>
    imgproduk {
        width: 400px;
        height: 400px;
    }
</style>

<body>
    @include('user/navbar')
    <!--Main layout-->
    <main class="mt-5 pt-4">
        <div class="paket-h1">
            <h2 class="text-center mb-5"><strong>Deskripsi Produk</strong></h2>
        </div>
        <div class="container mt-5">
            <!--Grid row-->
            <div class="row">
                <!--Grid column-->
                <div class="col-md-6 mb-4">
                    <img src="{{ asset('img/store/' . $produk->gambar) }}" class="imgproduk img-fluid" alt="" />
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-6 mb-4">
                    <!--Content-->
                    <div class="p-4">
                        <div class="mb-3">
                            <h2>{{ $produk->nama_produk }}</h2>
                        </div>

                        <p class="lead">
                            <span>Harga Rp. {{ number_format($produk->harga_produk) }}</span>
                        </p>

                        <strong>
                            <p style="font-size: 20px;">Deskripsi</p>
                        </strong>

                        <p>{!! nl2br($produk->deskripsi) !!}</p>
                        <div>
                            <form class="d-flex justify-content-left">
                                <!-- Default input -->
                                @auth
                                    <a href="{{ route('transaksi.order', $produk->id) }}">
                                        <button class="btn btn-primary ms-1" type="button">
                                            Beli Sekarang
                                            <i class="fas fa-shopping-cart ms-1"></i>
                                        </button>
                                    </a>
                                @endauth
                                @guest
                                    <a href="/login">
                                        <button class="btn btn-primary ms-1" type="button">
                                            Beli Sekarang
                                            <i class="fas fa-shopping-cart ms-1"></i>
                                        </button>
                                    </a>
                            </div>
                        @endguest
                        </form>
                        <a class="btn btn-success ms-1 mt-3" target="_blank"
                            href="https://wa.me/6285602904362?text=Halo%20penjual%20shopcouunt%20saya%20ingin%20bertanya%20mengenai%20produk%20{{ $produk->nama_produk }}%20terimakasih%20">
                            <i class="fab fa-whatsapp"></i> Hubungi Penjual
                        </a>
                        <div class="alert alert-danger mt-3" role="alert">
                            <h4 class="alert-heading">Deskripsi Produk</h4>
                            <p>Ingin mengetahui deskripsi produk dengan detail silahkan hubungan
                                penjual di link whatsapp atas</p>
                        </div>
                    </div>
                </div>
                <!--Content-->
            </div>
            <!--Grid column-->
        </div>
        <!--Grid row-->

        </div>
    </main>
    <!--Main layout-->





    @include('user/footer')
</body>

</html>
