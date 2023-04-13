<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title> Shoup Count</title>
    @include('user/header')
</head>

<body>
    @include('user/navbar')
    <header>
        <div id="intro" class="bg-image vh-100 shadow-1-strong">
            <video style="min-width: 100%; min-height: 100%;" playsinline autoplay muted loop>
                <source class="h-100" src="video/bacgorund.mp4" type="video/mp4" />
            </video>
            <div class="mask"
                style="
        background: linear-gradient(
          45deg,
          rgba(29, 236, 197, 0.4),
          rgba(91, 14, 214, 0.4) 100%
        );
      ">
                <div class="container d-flex align-items-center justify-content-center text-center h-100">
                    <div class="text-white">
                        <h1 class="mb-3 gradient-text" style="font-size: 42px;">Welcome To ShopCount</h1>
                        <h5 class="mb-4 gradient-text" style="font-size: 20px;">Tempat terbaik penjual akun game online
                        </h5>
                        <a class="btn btn-outline-light btn-lg m-2" href="#akun" role="button"
                            rel="nofollow">Produk</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="p-5">
        <section class="text-center">
            <div id="akun">
                <h4 class="mb-5"><strong>This Is a Product From Shopcount</strong></h4>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-12 mb-4">
                    <div class="card">
                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                            <div class="card-header bg-dark">STEAM</div>
                            <div class="card-body">
                                <img src="img/steam_logo.png" class="img-fluid" />
                                <a href="/steam">
                                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">STEAM</h5>
                            <p class="card-text">
                                Produk dari steam account
                            </p>
                            <a href="/steam" class="btn btn-dark">Button</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12 mb-4">
                    <div class="card">
                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                            <div class="card-header bg-dark">SUPERCELL</div>
                            <div class="card-body">
                                <img src="img/supercell_logo.png" class="img-fluid" />
                                <a href="/supercell">
                                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">SUPERCELL</h5>
                            <p class="card-text">
                                Produk dari supercell account
                            </p>
                            <a href="/supercell" class="btn btn-dark">Button</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12 mb-4">
                    <div class="card">
                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                            <div class="card-header bg-dark">XBOX</div>
                            <div class="card-body">
                                <img src="img/xbox_logo.png" class="img-fluid" />
                                <a href="/xbox">
                                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">XBOX</h5>
                            <p class="card-text">
                                Produk dari xbox account
                            </p>
                            <a href="/xbox" class="btn btn-dark">Button</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12 mb-4">
                    <div class="card">
                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                            <div class="card-header bg-dark">EPIC GAMES</div>
                            <div class="card-body">
                                <img src="img/epic_logo.png" class="img-fluid" />
                                <a href="/epicgames">
                                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">EPIC GAMES</h5>
                            <p class="card-text">
                                Produk dari epic games account
                            </p>
                            <a href="/epicgames" class="btn btn-dark">Button</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12 mb-4">
                    <div class="card">
                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                            <div class="card-header bg-dark">MOONTON</div>
                            <div class="card-body">
                                <img src="img/moonton_logo.png" class="img-fluid" />
                                <a href="/moonton">
                                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">MOONTON</h5>
                            <p class="card-text">Produk dari moonton account
                            </p>
                            <a href="/moonton" class="btn btn-dark">Button</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12 mb-4">
                    <div class="card">
                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                            <div class="card-header bg-dark">PUBG MOBILE</div>
                            <div class="card-body">
                                <img src="img/pubg_logo.png" class="img-fluid" />
                                <a href="/pubgm">
                                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">PUBG MOBILE</h5>
                            <p class="card-text">
                                Produk dari PlayerUnknown's Battlegrounds mobile
                            </p>
                            <a href="/pubgm" class="btn btn-dark">Button</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div class="container">
        <div class="m-3 py-1">
            <div class="paket-h1">
                <h2 class="text-center mb-5"><strong>Informasi Toko</strong></h2>
            </div>
            <div class="row">
                <div class="col-lg-6">

                    <h4><strong>ShopCount</strong></h4>
                    <p align="justify">
                        <font style="font-size: 23px">Selamat datang di website SHOPCOUNT.
                            Bingung mencari penjualan akun game online yang murah dan terpercaya? Anda masuk pada
                            pilihan
                            website yang tepat. Kami menyediakan berbagai macam akun game yang tentunya sangat mendukung
                            performa dalam bermain game online Anda, seperti Steam, Supercell, Xbox, Epic Games, Moonton
                            dan
                            Pubg Mobile.
                            Tidak perlu khawatir akan produk kami yang kurang bagus. Bagi kami kepuasan
                            pelanggan adalah yang utama. Produk-produk incaranmu bisa Anda dapatkan dengan harga yang
                            sangat
                            terjangkau. Yuk tunggu apalagi, langsung segera order di SHOPCOUNT
                            sekarang
                        </font>
                    </p>
                </div>
                <div class="col-md-6 justify-content-end">
                    <img src="img/toko.jpg" width="90%" alt="gambar FAQ" class="img-fluid">
                </div>
            </div>
        </div>
    </div>

    <div>
        <div class="paket-h1">
            <h2 class="text-center mb-5"><strong>Account Games</strong></h2>
        </div>
        <div class="row row-cols-1 p-4 row-cols-md-6 g-0">
            <div class="col">
                <div class="card h-100">
                    <a href="https://store.steampowered.com/" class="text-black">
                        <img src="img/steam_logo.png" class="card-img-top" alt="Hollywood Sign on The Hill" />
                        <div class="card-body">
                            <h5 class="card-title text-center">STEAM</h5>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <a href="https://supercell.com/en/" class="text-black">
                        <img src="img/supercell_logo.png" class="card-img-top" alt="Hollywood Sign on The Hill" />
                        <div class="card-body">
                            <h5 class="card-title text-center">SUPERCELL</h5>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <a href="https://www.xbox.com/id-ID/" class="text-black">
                        <img src="img/xbox_logo.png" class="card-img-top" alt="Hollywood Sign on The Hill" />
                        <div class="card-body">
                            <h5 class="card-title text-center">XBOX</h5>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <a href="https://store.epicgames.com/en-US/" class="text-black">
                        <img src="img/Epic_logo.png" class="card-img-top" alt="Palm Springs Road" />
                        <div class="card-body">
                            <h5 class="card-title text-center">EPIC GAMES</h5>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <a href="https://m.mobilelegends.com/" class="text-black">
                        <img src="img/moonton_logo.png" class="card-img-top" alt="Los Angeles Skyscrapers" />
                        <div class="card-body">
                            <h5 class="card-title text-center">MOONTON</h5>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <a href="https://www.pubgmobile.com/id/home.shtml" class="text-black">
                        <img src="img/pubg_logo.png" class="card-img-top" alt="Skyscrapers" />
                        <div class="card-body">
                            <h5 class="card-title text-center">PUBGM</h5>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <section id="bantuan" class="m-3 py-1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6" id="kontak">
                    <img src="img/board.jpg" width="90%" class="img-fluid" alt="Bantuan 24/7">
                </div>
                <div class="col-lg-6">
                    <h2><strong>Trusted Board atau Testimoni</strong></h2>
                    <p align="justify">Trusted Board atau Testimoni terdiri dari pernyataan tertulis atau lisan yang
                        berisi kepuasan atau ketidakpuasan konsumen terhadap suatu produk atau jasa yang dibeli dan
                        digunakan.
                        Kesaksian dapat berupa penilaian pengalaman bertransaksi, pelayanan, kegunaan, dan mutu produk
                        atau jasa. Kesaksian dapat digunakan untuk mengukur mutu produk atau jasa yang ditawarkan dan
                        mengukur tingkat kepuasan konsumen.</p>
                    <a href="/trusted"> <button type="button" class="btn btn-primary btn-rounded">
                            Selengkapnya</button></a>
                </div>
            </div>
        </div>
    </section>
    @include('user/footer')
</body>

</html>
