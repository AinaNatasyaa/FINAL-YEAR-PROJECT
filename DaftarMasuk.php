<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Log Masuk and Daftar Akaun</title>
    <link rel="stylesheet" href="DaftarMasuk.css">
    <script src="script.js"></script>
</head>
<body>
<section class="header">
    <div>
        <a href="Organisasi.php"><img src="image/logo3.png" alt="Logo" class="logo"></a>
    </div>

    <nav>
        <div class="nav-links">
            <ul id="main-menu-horizontal">
                <li><a href="LamanUtama.php">LAMAN UTAMA</a></li>
                <li><a href="#">LATAR BELAKANG</a>
                    <ul class="submenu-horizontal">
                        <li><a href="LatarBelakang.php">PENGENALAN</a></li>
                        <li><a href="Organisasi.php">CARTA ORGANISASI</a></li>
                    </ul>
                </li>
                <li><a href="#">AHLI KOPERASI</a>
                    <ul class="submenu-horizontal">
                        <li><a href="Borang.php">PENDAFTARAN AHLI</a></li>
                        <li><a href="CetakPengesahan.php">PENGESAHAN AHLI</a></li>
                        <li><a href="CetakPengesahan.php">YURAN PENDAFTARAN</a></li>
                    </ul>
                </li>
                <li><a href="Hubungi.php">HUBUNGI KAMI</a></li>
                <li><a href="LogMasuk1.php">LOG MASUK</a></li>
            </ul>
        </div>
    </nav>

    <div class="text-box">
        <h1>KOPERASI<br>POLITEKNIK TUANKU SYED SIRAJUDDIN</h1>
    </div>
</section>

<div class="signup">
    <form action="proses-daftar.php"  method="POST"><br>
        <h1>DAFTAR MASUK</h1><br>
        <label>Nama</label>
        <input type="text" name="username" required>
        <label>Email</label>
        <input type="email" name="email" required>
        <label>Kata Laluan</label>
        <input type="password" name="password" pattern=".{8,}" title="Password must be at least 8 characters" required>
        <label>Ulang Kata Laluan</label>
        <input type="password" id="password-confirmation" name="password-confirmation" pattern=".{8,}" title="Password must be at least 8 characters" required><br><br>

        <button>Daftar</button>
    </form>

    <p><a href="LogMasuk1.php"> Log Masuk Di Sini</a></p>
</div>

<section class="footer">
    <footer>
        &copy; 2023 KOPERASI POLITEKNIK TUANKU SYED SIRAJUDDIN. All rights reserved.
    </footer>
</section>

</body>
</html>
