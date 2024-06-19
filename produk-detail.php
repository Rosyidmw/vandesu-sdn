<?php
require "koneksi.php";

// Fungsi untuk memformat harga
function formatRupiah($angka)
{
    return number_format($angka, 0, ',', '.');
}

$nama = htmlspecialchars($_GET['nama']);
$queryProduk = mysqli_query($con, "SELECT * FROM produk WHERE nama = '$nama'");
$produk = mysqli_fetch_array($queryProduk);

$queryProdukTerkait = mysqli_query($con, "SELECT * FROM produk WHERE kategori_id = '$produk[kategori_id]' AND id != '$produk[id]' LIMIT 4");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Vandesu | Detail Produk</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
    body {
        padding-top: 56px;
    }

    .produk-card .card {
        transition: transform 0.3s ease;
    }

    .produk-card .card:hover {
        transform: scale(1.05);
    }

    .produk-card .card img {
        height: 200px;
        object-fit: cover;
    }
    </style>
</head>

<body>
    <!-- Navbar -->
    <?php require "navbar.php"; ?>

    <!-- detail produk -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 mb-5">
                    <img src="image/produk/<?php echo $produk['foto']; ?>" class="w-100" alt="">
                </div>
                <div class="col-lg-6 offset-lg-1">
                    <h1><?php echo $produk['nama']; ?></h1>
                    <p class="fs-5"><?php echo $produk['detail']; ?></p>
                    <p class="text-harga">
                        Rp <?php echo formatRupiah($produk['harga']); ?>
                    </p>
                    <p class="fs-5">Status Ketersediaan: <strong><?php echo $produk['ketersediaan_stok']; ?></strong>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- produk terkait -->
    <div class="container-fluid py-5 warna2">
        <div class="container">
            <h2 class="text-center text-white mb-5">Produk Terkait</h2>
            <div class="row produk-card">
                <?php while ($data = mysqli_fetch_array($queryProdukTerkait)) { ?>
                <div class="col-md-6 col-lg-3 mb-3">
                    <div class="card h-100">
                        <img src="image/produk/<?php echo $data['foto']; ?>" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $data['nama']; ?></h5>
                            <p class="card-text text-truncate"><?php echo $data['detail']; ?></p>
                            <p class="card-text text-harga">Rp <?php echo formatRupiah($data['harga']); ?></p>
                            <a href="produk-detail.php?nama=<?php echo $data['nama']; ?>"
                                class="btn warna2 text-white">Lihat Detail</a>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>

    <!-- footer -->
    <?php require "footer.php"; ?>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="fontawesome/js/all.min.js"></script>
</body>

</html>