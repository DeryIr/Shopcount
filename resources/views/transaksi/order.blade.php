<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @include('user/header')
</head>
<style>
    @import url('https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap');

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        list-style: none;
        font-family: 'Montserrat', sans-serif;
    }

    p {
        margin: 0%;
    }

    .containerorder {
        max-width: 900px;
        margin: 20px auto;
        overflow: hidden;
        background-color: #f8f9fa;
    }

    .box-1 {
        max-width: 450px;
        padding: 10px 40px;
        user-select: none;
    }

    .box-1 div .fs-12 {
        font-size: 8px;
        color: white;
    }

    .box-1 div .fs-14 {
        font-size: 15px;
        color: white;
    }

    .box-1 img.pic {
        width: 20px;
        height: 20px;
        object-fit: cover;
    }

    .box-1 img.mobile-pic {
        width: 100%;
        height: 200px;
        object-fit: cover;
    }

    .box-1 .name {
        font-size: 11px;
        font-weight: 600;
    }

    .dis {
        font-size: 12px;
        font-weight: 500;
    }

    .box-2 {
        max-width: 450px;
        padding: 10px 40px;
    }


    .box-2 .box-inner-2 input.form-control {
        font-size: 12px;
        font-weight: 600;
    }

    .box-2 .box-inner-2 .inputWithIcon {
        position: relative;
    }

    .box-2 .box-inner-2 .inputWithIcon span {
        position: absolute;
        left: 15px;
        top: 8px;
    }

    .box-2 .box-inner-2 .inputWithcheck {
        position: relative;
    }

    .box-2 .box-inner-2 .inputWithcheck span {
        position: absolute;
        width: 20px;
        height: 20px;
        border-radius: 50%;
        background-color: green;
        font-size: 12px;
        color: white;
        display: flex;
        justify-content: center;
        align-items: center;
        right: 15px;
        top: 6px;
    }
</style>

<body>
    @include('user/navbar')

    <div class="text-center mt-5 p-4">
        <h4><strong>Lengkapi Data di Bawah</strong></h4>
    </div>
    <div class="containerorder d-lg-flex">
        <div class="box-1 user">
            <div class="box-inner-1 pb-3 mb-3 ">
                <div class="d-flex justify-content-between mb-3 userdetails">
                    <p class="fw-bold">Nama Produk</p>
                    <p class="fw-lighter"><span class="fas fa-dollar-sign"></span>harga produk</p>
                </div>
                <div>
                    <img src="https://images.pexels.com/photos/100582/pexels-photo-100582.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500"
                        class="d-block w-100">
                </div>
                <p class="fw-bold mt-3">Deskripsi
                </p>
                <p class="fw-lighter">blablablabla
                </p>
            </div>
        </div>
        <div class="box-2">
            <div class="box-inner-2">
                <div>
                    <p class="fw-bold">Lengkapi Data dirimu</p>
                    <p class="dis mb-3">Silahkan isi data diri anda dengan lengkap dan benar!</p>
                </div>
                <form action="">
                    <div>
                        <p class="dis fw-bold mb-2">Nama</p>
                        <input class="form-control" type="text">
                    </div>
                    <div>
                        <p class="dis fw-bold mb-2">Email</p>
                        <input class="form-control" type="email">
                    </div>
                    <div>
                        <p class="dis fw-bold mb-2">No Whatapps</p>
                        <input class="form-control" type="number">
                    </div>
                    <div>
                        <p class="dis fw-bold mb-2">Alamat</p>
                        <textarea class="form-control"></textarea>
                    </div>
                    <div class="d-flex flex-column dis mt-3">
                        <div class="d-flex align-items-center justify-content-between mb-2">
                            <p class="fw-bold">Total</p>
                            <p class="fw-bold"><span class="fas fa-dollar-sign"></span>35.80</p>
                        </div>
                        <button class="w-100 btn btn-primary btn-lg" data-bs-target="#confirmModal" type="button">Bayar
                            Rp35.80</button>

                    </div>
                    <div class="modal fade" id="confirmModal" tabindex="-1" aria-labelledby="confirmModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="confirmModalLabel">Lanjutkan Ke Pembayaran</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Pastikan data diri anda sudah sesuai! </br></br> Apakah Anda yakin ingin
                                    melanjutkan?
                                    data anda akan masuk ke admin dalam status belum bayar, segera lakukan
                                    pembayaran cashless atau dapat melakukan pembayaran lewat petugas
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
        </div>
    </div>

    @include('user/footer')
</body>

</html>
