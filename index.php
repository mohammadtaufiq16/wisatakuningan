<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pilihan Wisata - Home</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <nav>
        <div class="logo">Palutunganview</div>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="gallery.php">Gallery</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
        <form class="search-form" action="#" method="GET">
            <input type="text" placeholder="Search..." name="search">
            <button type="submit">Search</button>
        </form>
    </nav>
    <div class="hero">
        <div class="hero-content">
            <h1>Welcome to Palutunganview</h1>
            <p>Explore the beauty of Palutungan through our curated travel destinations.</p>
        </div>
    </div>
    <div class="container">
        <h2>Pilihan Wisata Palutungan</h2>
        <div class="cards">
            <?php
                $wisata = [
                    ["title" => "Arunika Eatery", "desc" => "Destinasi wisata kuliner dengan menyuguhkan pesona indah Gunung Ciremai serta udaranya yang sejuk menjadi daya Tarik bagi Arunika Eatery.", "image" => "images/Arunika Eatery.jpg"],
                    ["title" => "Curug Putri", "desc" => "Curug Putri ini menjadi primadona para wisatawan. Curug setinggi 20 M ini diyakini masyarakat sekitar sebagai tempat singgah bidadari, Pemandangan tambah menakjubkan ketika hujan turun karena sering terlihat ada pelangi di atas curug.", "image" => "images/curug putri.jpg"],
                    ["title" => "Pondok Pinus Palutungan", "desc" => "Pondok pinus palutungan juga menjadi salah satu destinasi wisata yang populer di kawasan desa Cisantana Palutungan ini. Lokasinya tidak jauh dari Curug Putri Palutungan.", "image" => "images/wisata3.jpg"],
                ];

                foreach ($wisata as $item) {
                    echo '
                    <div class="card">
                        <img src="' . $item["image"] . '" alt="' . $item["title"] . '">
                        <div class="card-content">
                            <h3>' . $item["title"] . '</h3>
                            <p>' . $item["desc"] . '</p>
                            <button class="more-info-btn" onclick="toggleInfo(this)">More Info</button>
                            <div class="more-info">
                                <p>Informasi lebih lanjut tentang ' . $item["title"] . '.</p>
                            </div>
                        </div>
                    </div>';
                }
            ?>
        </div>
    </div>

    <script>
        function toggleInfo(button) {
            const info = button.nextElementSibling;
            if (info.style.display === "block") {
                info.style.display = "none";
                button.innerText = "More Info";
            } else {
                info.style.display = "block";
                button.innerText = "Less Info";
            }
        }
    </script>
</body>
</html>
