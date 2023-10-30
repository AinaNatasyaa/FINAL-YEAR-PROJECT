<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="with=device-width,initial-scale=1.0">
    <title>PTSS COOP MANAGEMENT SYSTEM</title>
    <link rel="stylesheet" href="Organisasi.css">
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
                        <li><a href="Pengesahan.php">PENGESAHAN AHLI</a></li>
                        <li><a href="Yuran.php">YURAN PENDAFTARAN</a></li>
                    </ul>
                </li>
                <li><a href="Hubungi.php">HUBUNGI KAMI</a></li>
                <li><a href="javascript:void(0);" onclick="confirmLogout();">LOG KELUAR</a></li>
            </ul>
        </div>
    </nav>
    <div class="text-box">
        <h1>KOPERASI<br>POLITEKNIK TUANKU SYED SIRAJUDDIN</h1>
    </div>
</section>

<h1>
    <marquee behavior="scroll" direction="left" scrollamount="10">
        <span>CARTA ORGANISASI KOPERASI POLITEKNIK TUANKU SYED SIRAJUDDIN</span>
    </marquee>
</h1> <br><br>

<img src="image/carta.jpeg" alt="Carta Organisasi" class="organization-chart"/><br><br>

<!--footer-->
<section class="footer">
    <footer>
        &copy; 2023 KOPERASI POLITEKNIK TUANKU SYED SIRAJUDDIN. All rights reserved.
    </footer>
</section>
</body>
</html>