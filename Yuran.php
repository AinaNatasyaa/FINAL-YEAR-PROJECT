<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yuran Pendaftaran</title>
    <link rel="stylesheet" href="Yuran.css">
</head>
<body>
<section class="header">
    <div>
        <a href="latarBelakang.php"><img src="image/logo3.png" alt="Logo" class="logo"></a>
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

    <?php if (isset($_GET['error'])): ?>
        <p><?php echo $_GET['error']; ?></p>
    <?php endif ?>

<section id="details-section">
    <div>
        <h2>Cara Memuat Naik Resit</h2><br>
        <ol>
            <li>Klik pada butang 'Pilih Fail'</li>
            <li>Pilih fail resit pembayaran daripada peranti anda.</li>
            <li>Klik butang "Muat Naik" untuk memuat naik resit tersebut.</li>
            <li>Resit anda akan disemak oleh pentadbir kami, dan akses anda kepada perkhidmatan koperasi akan diteruskan setelah pengesahan.</li>
        </ol><br>
        <p>Jika anda mempunyai sebarang pertanyaan mengenai muat naik resit, sila hubungi kami melalui bahagian 'Hubungi Kami'.</p>
    </div>
</section>


<form action="upload.php"
          method="post"
          enctype="multipart/form-data">
        <input type="file"
                name="my-image">

        <input type="submit"
                name="submit"
                value="Upload">
    </form>
</body>
</html>
