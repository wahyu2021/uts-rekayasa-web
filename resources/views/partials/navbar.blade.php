<nav class="navbar navbar-expand-lg navbar-dark sticky-top">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="/">
            <img src="{{ asset('images/logo.png') }}" alt="UMKM Store Logo" style="height: 40px; margin-right: 10px;">
            <span class="d-none d-lg-inline">Nofu Coffee</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#produk">Produk</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#tentang">Tentang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#kontak">Kontak</a>
                </li>
            </ul>
            <div class="ms-3">
                <a href="/cart" class="btn btn-outline-primary me-2">
                    <i class="bi bi-cart3"></i> Keranjang
                </a>
                @guest
                    <a href="{{ route('auth.login') }}" class="btn btn-primary">
                        <i class="bi bi-person"></i> Masuk
                    </a>
                @endguest
                @auth

                    <form action="{{ route('auth.logout') }}" method="POST" class="d-inline-block">
                        @csrf
                        <a href="{{ route('auth.login') }}" class="btn btn-outline-danger">
                            <i class="bi bi-box-arrow-right"></i> Keluar
                        </a>
                    </form>
                @endauth
            </div>
        </div>
    </div>
</nav>
