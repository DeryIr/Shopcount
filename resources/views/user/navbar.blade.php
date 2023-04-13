<style>
    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
    }

    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
        }
    }

    .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, 0.1);
        border: solid rgba(0, 0, 0, 0.15);
        border-width: 1px 0;
        box-shadow: inset 0 0.5em 1.5em rgba(0, 0, 0, 0.1),
            inset 0 0.125em 0.5em rgba(0, 0, 0, 0.15);
    }

    .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
    }

    .bi {
        vertical-align: -0.125em;
        fill: currentColor;
    }

    .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
    }

    .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
    }

    /* style coba */
    .hero {
        background: linear-gradient(to bottom, rgba(253, 253, 254, 0), rgba(39, 84, 129, 0.7)),
            url("") no-repeat center;
        background-size: cover;
        height: 100vh;
        position: relative;
    }

    /* Styling untuk teks di atas background */
    .hero-text {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
        color: rgb(255, 255, 255);
        /* color: #225fc3; */
        width: 80%;
        max-width: 800px;
        font-family: 'Gloock', serif;
    }

    .paket-h1 {
        font-family: 'Gloock', serif;
    }

    .hero-text h1 {
        font-size: 5rem;
        margin-bottom: 1rem;
    }

    .hero-text p {
        font-size: 1.5rem;
        margin-bottom: 1.5rem;
    }

    .hero-text button {
        background-color: #0c7cd5;
        border: none;
        color: #fff;
        padding: 1rem 2rem;
        font-size: 1.2rem;
        cursor: pointer;
    }

    /* Styling untuk responsif */
    @media only screen and (max-width: 768px) {
        .hero-text {
            width: 90%;
        }

        .hero-text h1 {
            font-size: 3rem;
        }

        .hero-text p {
            font-size: 1.2rem;
        }

        .hero-text button {
            font-size: 1rem;
        }
    }

    /* Color of the links BEFORE scroll */
    .navbar-scroll .nav-link,
    .navbar-scroll .navbar-toggler .fa-bars {
        color: #fff;
    }

    /* Color of the links AFTER scroll */
    .navbar-scrolled .nav-link,
    .navbar-scrolled .navbar-toggler .fa-bars {
        color: #2d2d2e;
    }

    /* Color of the navbar AFTER scroll */
    .navbar-scrolled {
        background-color: #fff;
    }

    /* An optional height of the navbar AFTER scroll */
    .navbar.navbar-scroll.navbar-scrolled {
        padding-top: 5px;
        padding-bottom: 5px;
    }

    .gradient-text {
        background-clip: text;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-image: linear-gradient(to right, #e66465, #9198e5);
        color: transparent;
        font-family: 'Montserrat', sans-serif;
        font-weight: bold;
        text-shadow: 2px 2px #ffffff;
    }

    .card-header {
        background-color: #0c7cd5;
        font-family: 'fantasy';
        color: white;
    }
</style>
<nav class="navbar bg-body-tertiary fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="Index.php">
            <img src="img/Logo2.png" alt="Logo" width="170" height="40" class="d-inline-block align-text-top">
        </a>
        <div class="dropdown">
            @auth
                <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton"
                        data-mdb-toggle="dropdown" aria-expanded="false">
                        {{ auth()->user()->nama }}
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <li><a class="dropdown-item" href="/sesi/logout">Keluar</a></li>
                    </ul>
                </div>
            @endauth
            @guest
                <a class="me-3 py-2 text-dark text-decoration-none btn btn-secondary" href="/register">Daftar</a>
                <a class="py-2 text-dark-decoration-none btn btn-primary" href="/login">Masuk</a>
            @endguest
            </ul>

        </div>
    </div>
</nav>
<script>
    window.onscroll = function() {
        var navbar = document.querySelector(".navbar");
        if (window.scrollY > 0) {
            navbar.classList.add("navbar-scrolled");
        } else {
            navbar.classList.remove("navbar-scrolled");
        }
    };
</script>
