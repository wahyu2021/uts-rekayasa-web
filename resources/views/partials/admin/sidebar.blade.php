<aside class="sidebar d-flex flex-column p-3">
    <div class="sidebar-header text-center">
        <a class="navbar-brand" href="{{ route('admin.dashboard') }}">
            <i class="bi bi-shop"></i> UMKM Store
        </a>
        <small class="text-muted">Admin Panel</small>
    </div>
    <nav class="nav flex-column">
        <a class="nav-link active" href="{{ route('admin.dashboard') }}">
            <i class="bi bi-grid-1x2-fill"></i>
            Dashboard
        </a>
        <a class="nav-link" href="#">
            <i class="bi bi-box-seam-fill"></i>
            Data Produk
        </a>
        <a class="nav-link" href="#">
            <i class="bi bi-tags-fill"></i>
            Data Kategori
        </a>
    </nav>
    <hr class="my-3">
    <div class="mt-auto">
        <a href="/" class="btn btn-outline-secondary w-100">
            <i class="bi bi-box-arrow-left"></i> Kembali ke Toko
        </a>
    </div>
</aside>