<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="img/logo.png">
    <title>Detail Order</title>
    @include('user/header')
    <!-- @TODO: replace SET_YOUR_CLIENT_KEY_HERE with your client key -->
    <script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js"
        data-client-key="{{ config('midtrans.client_key') }}"></script>
    <!-- Note: replace with src="https://app.midtrans.com/snap/snap.js" for Production environment -->
</head>
<style>
    .form-outline {
        border: 1px solid black;
    }
</style>

<body>
    @include('user/navbar')
    <main>
        <section class="container mt-5 mb-5">
            <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
                <h1 class="display-8 fw-normal">Order Detail</h1>
                <p class="fs-5 text-muted">
                    Silahkan cek apakah sudah benar detail order anda
                </p>
            </div>
            <div class="row">
                <div class="col-md-7 col-xl-7 mb-4 mb-md-0">
                    <h5 class="mb-0">{{ $order->nama_produk }}</h5>
                    <h5 class="mb-3 text-success">Rp. {{ number_format($order->harga_produk) }}</h5>
                    <div>
                        <div class="d-flex flex-row mt-1">
                            <h5>Detail Pembeli</h5>
                        </div>
                        <p>
                            Pastikan jika data anda sudah benar karena nanti akun akan di kirim melalui email anda, Jika
                            salah bukan tanggung jawab penjual
                        </p>

                        <div class="d-flex flex-column mb-3">
                            <label class="btn-outline-primary mb-1">
                                <div class="d-flex justify-content-between text-primary">
                                    <span>Nama </span>
                                    <span>{{ $order->nama }}</span>
                                </div>
                            </label>
                            <label class="btn-outline-primary mb-1">
                                <div class="d-flex justify-content-between text-primary">
                                    <span>No Whatsapp </span>
                                    <span>{{ $order->no_hp }}</span>
                                </div>
                            </label>
                            <label class="btn-outline-primary mb-1">
                                <div class="d-flex justify-content-between text-primary">
                                    <span>Email </span>
                                    <span>{{ $order->email }}</span>
                                </div>
                            </label>
                        </div>
                        <hr />
                        <form class="needs-validation mt-4" action="/checkout" method="POST">
                            @csrf
                            <input type="hidden" name="_token" value="FNK8v5e6LCxgSY5YNj2IWeK3uzKQoq9k22vHHxAB">
                            <div class="p-3" style="background-color: #eee;">
                                <span class="fw-bold">Order Recap</span>
                                <div class="d-flex justify-content-between">
                                    <span>Nama Produk</span> <span>{{ $order->nama_produk }}</span>
                                </div>
                                <hr />
                                <div class="d-flex justify-content-between">
                                    <span class="lh-sm">Harga</span>
                                    <span>Rp. {{ number_format($order->harga_produk) }}</span>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <span class="lh-sm">Biaya penanganan</span>
                                    <span>RP. 0</span>
                                </div>
                                <hr />
                                <div class="d-flex justify-content-between">
                                    <span>Total </span> <span class="text-success">Rp.
                                        {{ number_format($order->harga_produk) }}</span>
                                </div>
                            </div>
                        </form>
                        <div class="row p-3">
                            <button class="w-100 btn btn-primary btn-lg mt-3" id="pay-button" type="submit"
                                style="" id="pay-button">Bayar
                                Sekarang</button>
                        </div>
                        <div class="row p-3">
                            <a class="btn btn-success btn-lg mt-3" target="_blank"
                                href="https://wa.me/6285602904362?text=Halo%20penjual%20shopcouunt%20saya%20ingin%20bertanya%20mengenai%0A%0A%0A%0Aterimakasih%20">
                                <i class="fab fa-whatsapp"></i> Apabila terdapat kendala hubungi
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-5 col-lg-4 col-xl-4 offset-lg-1">
                    <div class="p-3" style="background-color: #eee;">
                        <span class="fw-bold">Keterangan</span><br>
                        <i>*Pembayaran hanya bisa melalui pembayaran Cashless</i><br>
                        <i>*Tombol Bayar sekarang digunakan ketika ingin melakukan pembayaran secara transfer</i><br>
                        <i>*Tombol hubungi petugas digunakan ketika ingin melakukan pengiriman bukti pembayaran</i><br>
                        <i>*Setelah melakukan pembayaran segera hubungi penjual dan akun game anda akan segera dikirim
                            oleh
                            penjual</i><br>
                        <i>*Jangan lupa mengisi testimoni untuk membantu toko kami</i>
                    </div>
                    <div><img src="img/pay.jpg" width="100%" class="img-fluid" alt="pay"></div>
                </div>
            </div>
        </section>
    </main>
    {{-- @include('transaksi/notif') --}}
    @include('user/footer')

    <script type="text/javascript">
        // For example trigger on button clicked, or any time you need
        var payButton = document.getElementById('pay-button');
        payButton.addEventListener('click', function() {
            // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token
            window.snap.pay('{{ $snapToken }}', {
                onSuccess: function(result) {
                    /* You may add your own implementation here */
                    // alert("payment success!");
                    window.location.href = "/invoice{{ $order->id }}"
                    console.log(result);
                },
                onPending: function(result) {
                    /* You may add your own implementation here */
                    alert("wating your payment!");
                    console.log(result);
                },
                onError: function(result) {
                    /* You may add your own implementation here */
                    alert("payment failed!");
                    console.log(result);
                },
                onClose: function() {
                    /* You may add your own implementation here */
                    alert('you closed the popup without finishing the payment');
                }
            })
        });
    </script>
</body>

</html>
