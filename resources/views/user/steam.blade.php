<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="img/logo.png">
    <title>Steam</title>

    @include('user/header')
</head>
<style>
    .card {
        box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
    }

    .footer-cta {
        box-shadow: rgba(0, 0, 0, 0.15) 0px 5px 15px;
    }

    .price {
        color: #263238;
        font-size: 24px;
    }

    .card-title {
        color: #263238
    }
</style>

<body>
    @include('user/navbar')
    <header>
        <!-- Background image -->
        <div class="text-center bg-image"
            style="
            background-image: url('img/Halsteam.jpg');
            height: 400px;
            margin-top: 67px;
            margin-bottom: 20px;
          ">
        </div>
        <!-- Background image -->
    </header>
    <!--Main layout-->
    <main>
        <div class="container">
            <!-- Products -->
            <div class="row">
                @foreach ($data as $produksteam)
                    <div class="col-lg-3 col-md-6 mb-4">
                        <section>
                            <div class="card">
                                <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light"
                                    data-mdb-ripple-color="light">
                                    <img src="{{ asset('img/store/' . $produksteam->gambar) }}" class="w-100" />
                                    <a href="{{ route('user.pesan', $produksteam->id) }}">
                                        <div class="hover-overlay">
                                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);">
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="card-body text-center">
                                    <a href="{{ route('user.pesan', $produksteam->id) }}" class="text-reset">
                                        <h5 class="card-title mb-2">{{ $produksteam->nama_produk }}</h5>
                                    </a>
                                    <a href="{{ route('user.pesan', $produksteam->id) }}" class="text-reset ">
                                        <p>Steam Account</p>
                                    </a>
                                    <h6 class="mb-3 price">Rp. {{ number_format($produksteam->harga_produk) }}</h6>
                                </div>
                            </div>
                        </section>
                    </div>
                @endforeach
            </div>
            <!-- Navbar -->
            @include('user/produkcategories')
        </div>

    </main>
    @include('user/footer')
</body>

</html>
