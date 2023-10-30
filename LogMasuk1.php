<?php
$is_invalid = false;
$error_message = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $mysqli = require __DIR__ . "/database.php";

    // Check if the email and password fields are empty
    if (empty($_POST["email"]) || empty($_POST["password"])) {
        $error_message = "Email and password are required.";
        $is_invalid = true;
    } else {
        $sql = sprintf("SELECT * FROM user WHERE email = '%s'",
            $mysqli->real_escape_string($_POST["email"]));

        $result = $mysqli->query($sql);
        $user = $result->fetch_assoc();

        if ($user) {
            if (password_verify($_POST["password"], $user["password_hash"])) {
                session_start();
                $_SESSION["user_id"] = $user["id"];

                if ($user["username"] == "admin") {
                    //redirect to admin page
                    header("Location: admin-page.php");
                } elseif ($user["username"] == "staff") {
                    //redirect to staff page
                    header("Location: staff-page.php");
                } else {
                    //redirect to user page
                    header("Location: user-page.php");
                }
                exit;
            }
        }
        $is_invalid = true;
        $error_message = "Invalid email or password. Please try again.";
    }
}

?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Login and Register</title>
    <link rel="stylesheet" href="DaftarMasuk.css">
    <script src="script.js"></script>
</head>
<body>
<<section class="header">
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

<div class="login">
    <h1>Log Masuk</h1>

    <form method="POST">

        <label>Email</label>
        <input type="email" name="email" id="email"
               value="<?=htmlspecialchars($_POST["email"] ?? "") ?>">
        <label>Password</label>
        <input type="password" name="password">

        <?php if ($is_invalid): ?>
            <p style="color: red;"><?= $error_message ?></p>
        <?php endif; ?>



        <button>Log Masuk</button>
    </form>
    <p>Tiada Akaun? <a href="DaftarMasuk.php">Daftar Masuk Sini</a></p>

    <!--footer-->
    <section class="footer">
        <footer>
            &copy; 2023 KOPERASI POLITEKNIK TUANKU SYED SIRAJUDDIN. All rights reserved.
        </footer>
    </section>
</body>
</html>