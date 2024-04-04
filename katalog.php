<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalog Produk - Toko Bangunan</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
        <h1>Katalog Produk</h1>
        <nav>
            <ul>
                <li><a href="index.html">Beranda</a></li>
                <li><a href="catalog.php">Katalog</a></li>
                <li><a href="cart.php">Keranjang</a></li>
                <li><a href="checkout.php">Checkout</a></li>
                <li><a href="login.php">Login</a></li>
            </ul>
        </nav>
    </header>

    <section class="catalog">
        <?php
        // Data produk 
        $produk = array(
            array("id" => 1, "nama" => "Cat Tembok", "harga" => 50000, "gambar" => "cat-tembok.jpg"),
            array("id" => 2, "nama" => "Paku", "harga" => 10000, "gambar" => "paku.jpg"),
            array("id" => 3, "nama" => "Keramik", "harga" => 200000, "gambar" => "keramik.jpg")
            array("id" => 4, "nama" => "semen", "harga" =>10000, "gambar" =>"semen.jpg")
        );

        // Loop untuk menampilkan setiap produk
        foreach ($produk as $item) {
            echo '<div class="product">';
            echo '<img src="images/' . $item["gambar"] . '" alt="' . $item["nama"] . '">';
            echo '<h3>' . $item["nama"] . '</h3>';
            echo '<p>Harga: Rp ' . number_format($item["harga"], 0, ',', '.') . '</p>';
            // Tombol tambahkan ke keranjang
            echo '<button onclick="addToCart(' . $item["id"] . ')">Tambahkan ke Keranjang</button>';
            echo '</div>';
        }
        ?>
    </section>

    <footer>
        <p>&copy; 2024 Toko Bangunan</p>
    </footer>
</body>
</html>
