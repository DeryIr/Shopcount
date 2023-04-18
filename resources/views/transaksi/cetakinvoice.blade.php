<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="img/logo.png">
    <title>Shopcount || Pesanan</title>
    @include('user/header')
</head>

<body>
    <div class="container py-3">
        <main>
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
                            <li class="text-muted"><i class="fas fa-phone"></i> 085602904362</li>
                        </ul>
                    </div>
                    <div class="col-xl-4">
                        <ul class="list-unstyled">
                            <li class="text-muted">Untuk : <span style="color:#5d9fc5 ;">{{ $order->nama }}</span>
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
                    <div class="col-6">
                        <p class="ms-3">Tanggal {{ $order->updated_at->translatedFormat('l, d F Y : H:i') }}
                        </p>
                    </div>
                    <div class="col-6">
                        <div class="col-xl-6">
                            <p class="text-black float-start"><span class="text-black me-3"> Total
                                    Harga</span><span style="font-size: 25px;">Rp.
                                    {{ number_format($order->harga_produk) }}</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
<footer>
    <div class="display-8 fw-bold text-secondary text-center ">
        <img src="img/lunas stamp.png" height="30%" width="30%" alt="">
        <h4>Terimakasih</h4>
    </div>
</footer>
<script>
    window.addEventListener("load", window.print());
</script>

</html>
