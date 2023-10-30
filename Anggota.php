<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Borang Anggota</title>
    <link rel="stylesheet" href="Anggota.css">
</head>
<body>
<div class="container">
    <b><u>IKRAR  ANGGOTA<br>(Undang-undang Kecil 13)</u></b><br><br>
    <?php
    $memberName = '';
    $kpNumber = '';

    if(isset($_POST['member_name'])){
        $memberName = $_POST['member_name'];
    }

    if(isset($_POST['kp_number'])){
        $kpNumber = $_POST['kp_number'];
    }
    ?>
    <div class="box from-box"><br><br><br><br>
        <form class="name" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <label for="member_name" >Saya </label>
            <input type="text" class="inline-block"value="<?php echo htmlspecialchars($memberName); ?>">
            <label for="kp_number">, No.K/P </label>
            <input type="text" class="inline-block"value="<?php echo htmlspecialchars($kpNumber); ?>">

            <p><br>
                berikut bahawa sekiranya diterima menjadi anggota saya akan sentiasa patuh dan terikat kepada undang-undang kecil koperasi ini dan
                aturan-aturan aktiviti sedia ada dan apa-apa pindaan dan pengubahsuaian yang diperbuat kepadanya dari
                semasa ke semasa dengan sah semasa tempoh keanggotaan saya dan bahawa saya bukanlah seorang bankrap dan
                seorang yang terhadapnya masih berkuatkuasa satu sabitan bagi kesalahan yang boleh daftar dan saya tidak
                pernah dibuang daripada keanggotaan mana-mana Koperasi dalam tempoh satu tahun dari tarikh permohonan saya
                ini.
            </p><br>

            <p>
                Jika sekiranya saya tidak menuntut modal saham/dividen yang diisytiharkan (apabila berhenti/berpindah
                tempat kerja), saya bersetuju menyerahkan modal saham/dividen yang diisytiharkan kepada koperasi sebagai
                hasil. Sekiranya saya diterima menjadi anggota, saya akan sentiasa patuh dan terikat kepada Undang-undang
                kecil koperasi dan aturan dan apa-apa pindaan yang dibuat dari semasa ke semasa.
            </p>
        </form>

        <div style="display: flex; justify-content: space-between;">
            <div>
                <br><br>
                <span id="witness_signature_1">......................................................</span>
                <p><center>(Tandatangan)</center></p>
                <br><br>
            </div>

            <div>
                <br><br>
                <p>(Tarikh)</p>
                <p>Tarikh: <span id="date">
                        <?php
                        echo date('Y-m-d');
                        ?>
                        </span></p>
            </div>
        </div>
        <div style="display: flex; justify-content: space-between; margin-top: 20px;">
            <div>
                <p>Saksi I</p>
                <p>Tandatangan: <span id="witness_signature_1">......................................................</span></p>
                <p>Nama: <span id="witness_name_1">
                        <?php
                        if(isset($_POST['witness_name_1'])){
                            echo $_POST['witness_name_1'];
                        } else {
                            echo '__________';
                        }
                        ?>
                        </span></p>
                <p>No.K/P: <span id="witness_ic_number_1">
                        <?php
                        if(isset($_POST['witness_ic_number_1'])){
                            echo $_POST['witness_ic_number_1'];
                        } else {
                            echo '__________';
                        }
                        ?>
                        </span></p>
            </div>
            <div>
                <p>Saksi II</p>
                <p>Tandatangan: <span id="witness_signature_2">......................................................</span></p>
                <p>Nama: <span id="witness_name_2">
                        <?php
                        if(isset($_POST['witness_name_2'])){
                            echo $_POST['witness_name_2'];
                        } else {
                            echo '__________';
                        }
                        ?>
                        </span></p>
                <p>No.K/P: <span id="witness_ic_number_2">
                        <?php
                        if(isset($_POST['witness_ic_number_2'])){
                            echo $_POST['witness_ic_number_2'];
                        } else {
                            echo '__________';
                        }
                        ?>
                        </span></p>
                <br><br>
            </div>
        </div>
        <hr>
        <br><br><br>
        <div class="title">
            <b>KOPERASI POLITEKNIK TUANKU SYED SIRAJUDDIN PERLIS BHD.<br><br>
                BORANG PENAMA<br> (Undang-undang Kecil 17)</b>
        </div>

        <form class="penama" action="process.php" method="post">
            <label for="nama_penuh">BAHAWA dengan ini saya</label>
            <input type="text" id="nama_penuh" class="inline-block" required><br>

            <label for="no_kp">No.K/P</label>
            <input type="text" id="no_kp" class="inline-block-1" required> &nbsp;&nbsp;&nbsp;

            <label for="ahli_no">Ahli No</label>
            <input type="text" id="ahli_no" class="inline-block-1" required>
            <br>
            <p><strong>KOPERASI POLITEKNIK TUANKU SYED SIRAJUDDIN PERLIS BHD</strong>
                melantik orang di bawah <br>ini sebagai penama / waris * saya untuk :-</p><br><br>

            <label for="nama_penama">Penama / Waris:</label><br><br><br>

            <label for="nama_penuh_penama">Nama Penuh:</label>&nbsp;
            <input type="text" id="nama_penuh_penama" class="inline-block"required><br><br>

            <label for="warganegara">Warganegara:</label>
            <input type="text" id="warganegara" class="inline-block" required><br><br>

            <label for="no_kp_penama">No.K/P:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" id="no_kp_penama" class="inline-block" required><br><br>

            <label for="no_telefon">No. Telefon:</label>&nbsp;&nbsp;&nbsp;
            <input type="text" id="no_telefon" class="inline-block" required><br><br>

            <label for="address"> Alamat Tetap:</label>
            <textarea id="address" name="address"  class="inline-block" required></textarea><br><br>

        </form>

        <div class="field">
            <a href="pengesahan.php"><input type="submit" class="btn" value="Submit" id="submit-button"required></a>
        </div>
    </div>
</div>
<div id="popup" class="popup">
    <div class="popup-content">
        <span class="close-button" onclick="closePopup()">&times;</span>
        <h2>Pendaftaran Anda Masih Dalam Proses</h2>
        <p>Terima kasih atas pendaftaran Anda. Pendaftaran Anda sedang diproses. Kami akan segera menghubungi Anda untuk informasi lebih lanjut.</p>
        <!-- Anda dapat menambahkan informasi tambahan atau pesan kepada pengguna di sini -->
    </div>
</div>
<script>
    // Function untuk menampilkan popup
    function showPopup() {
        document.getElementById("popup").style.display = "block";
    }

    // Function untuk menutup popup
    function closePopup() {
        document.getElementById("popup").style.display = "none";
        window.location.href = "LamanUtama.php";
    }

    // Tambahkan event listener pada tombol "Submit"
    document.getElementById("submit-button").addEventListener("click", function(event) {
        // Hentikan pengiriman form bawaan untuk mencegah pengalihan halaman
        event.preventDefault();
        // Tampilkan popup saat tombol "Submit" diklik
        showPopup();
    });
</script>

</body>
</html>