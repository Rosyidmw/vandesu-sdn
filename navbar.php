<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container d-flex justify-content-between">
        <!-- Identitas Toko -->
        <div class="d-flex align-items-center">
            <label class="navbar-brand mb-0 me-4">Vandesu Merch<i class="fa-solid fa-paw ms-2"></i></label>
        </div>

        <!-- Tombol Toggle untuk Mobile View -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navigasi -->
        <div class="collapse navbar-collapse text-light" id="navbarTogglerDemo02">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item me-4">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item me-4">
                    <a class="nav-link" href="tentang-kami.php">Tentang Kami</a>
                </li>
                <li class="nav-item me-4">
                    <a class="nav-link" href="produk.php">Produk</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<style>
    .navbar-dark .navbar-nav .nav-link {
        color: #fff;
        /* Warna teks link navbar */
        transition: border-color 0.3s;
        /* Transisi untuk efek underline */
        position: relative;
        /* Untuk mengatur posisi pseudo-element */
    }

    .navbar-dark .navbar-nav .nav-link:hover {
        text-decoration: none;
        /* Hilangkan dekorasi underline default */
    }

    .navbar-dark .navbar-nav .nav-link::after {
        content: '';
        display: block;
        width: 0;
        height: 2px;
        /* Tinggi garis bawah */
        background-color: #DC5F00;
        /* Warna garis bawah */
        position: absolute;
        bottom: -2px;
        /* Jarak garis bawah dari teks */
        left: 0;
        transition: width 0.3s ease;
        /* Transisi untuk efek underline */
    }

    .navbar-dark .navbar-nav .nav-link:hover::after {
        width: 100%;
        /* Panjang garis bawah saat dihover */
    }

    .navbar-brand {
        color: #DC5F00;
        /* Warna teks identitas toko */
        font-weight: normal;
        /* Tebal teks */
        font-size: 1.25rem;
        /* Ukuran font */
    }
</style>