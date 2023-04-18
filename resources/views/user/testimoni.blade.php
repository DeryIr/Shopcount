<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="img/logo.png">
    <title>Trusted Board</title>
    @include('user/header')
</head>
<style>
    .blockquote-custom {
        position: relative;
        font-size: 1.1rem;
    }

    .blockquote-custom-icon {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        position: absolute;
        top: -25px;
        left: 50px;
    }
</style>

<body>
    @include('user/navbar')
    <main>
        <div class="card mt-5 p-5">
            <div class="text-center">
                <h1 class="display-8 fw-normal">Testimoni</h1>
                <p class="fs-5 text-muted">
                    Berisi testimoni dari pembeli pembeli website ini
                </p>
            </div>
            <div class="row">
                @foreach ($data as $testimoni)
                    <div class="col-lg-6 mx-auto">
                        <!-- CUSTOM BLOCKQUOTE -->
                        <blockquote class="blockquote blockquote-custom bg-white p-5 shadow rounded">
                            <div class="blockquote-custom-icon bg-info shadow-sm"><i
                                    class="fa fa-quote-left text-white"></i>
                            </div>
                            <div class="col mb-2">
                                <span class="border border-dark border-2">Rating
                                    {{ $testimoni->rating }} / 10
                                </span>
                            </div>
                            <h4>Deskripsi</h4>
                            <p class="mb-0 mt-2 font-italic">"{{ $testimoni->deskripsi }}"
                            <footer class="blockquote-footer pt-4 mt-4 border-top">{{ $testimoni->nama }}
                            </footer>
                        </blockquote>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
    @include('user/footer')
</body>

</html>
