<!doctype html>
<html lang="en">

<head>
    <link rel="icon" href="img/logo.png">
    <title>Sign In</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{ asset('Hal_Login&Regiter') }}/css/style.css">

</head>

<body class="img js-fullheight" style="background-image: url(img/bglogin.png);">
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center">
                    <h2 class="heading-section">Welcome To ShopCount</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="login-wrap p-0">
                        <h6 class="text-center">Create account?</h6>
                        <form action="/sesi/create" class="signin-form" method="post">
                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control" name="nama"
                                    value="{{ Session::get('nama') }}" placeholder="Nama" required
                                    oninvalid="this.setCustomValidity('Wajib Di Isi !!!')"
                                    oninput="this.setCustomValidity('')">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email"
                                    value="{{ Session::get('email') }}" placeholder="Email" required
                                    oninvalid="this.setCustomValidity('Wajib Di Isi Dan harap menggunakan @!!!')"
                                    oninput="this.setCustomValidity('')">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="no_wa"
                                    value="{{ Session::get('no_wa') }}" placeholder="Nohp" required
                                    oninvalid="this.setCustomValidity('Wajib Di Isi !!!')"
                                    oninput="this.setCustomValidity('')">
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" class="form-control" placeholder="Password"
                                    required oninvalid="this.setCustomValidity('Wajib Di Isi !!!')"
                                    oninput="this.setCustomValidity('')">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Comfirmation Password"
                                    name="password_verified" required
                                    oninvalid="this.setCustomValidity('Wajib Di Isi !!!')"
                                    oninput="this.setCustomValidity('')">
                            </div>
                            <div class="form-group">
                                <button type="submit" name="submit"
                                    class="form-control btn btn-primary submit px-3">Sign
                                    Up</button>
                            </div>
                        </form>
                        <p class="w-100 text-center">&mdash; Or Sign In &mdash;</p>
                        <div class="social d-flex text-center">
                            <a href="/login" class="px-2 py-2 mr-md-1 rounded">Sign In</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="{{ asset('Hal_Login&Regiter') }}/js/jquery.min.js"></script>
    <script src="{{ asset('Hal_Login&Regiter') }}/js/popper.js"></script>
    <script src="{{ asset('Hal_Login&Regiter') }}/js/bootstrap.min.js"></script>
    <script src="{{ asset('Hal_Login&Regiter') }}/js/main.js"></script>

</body>
