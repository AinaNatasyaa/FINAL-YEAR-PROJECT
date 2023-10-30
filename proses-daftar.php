<?php

$password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);

$mysqli = require __DIR__. "/database.php";

$sql = "INSERT INTO user (username, email, password_hash)
        VALUES (?,?,?)";

$stmt = $mysqli->stmt_init();

if(! $stmt->prepare($sql)) {
    die("SQL error: " . $mysqli->error);
}

$stmt->bind_param("sss",
                 $_POST["username"],
                 $_POST["email"],
                 $password_hash);

if($stmt->execute()) {
    header("Location: daftar-berjaya.html");
    exit;
} else {
    if($mysqli->errno === 1062) {
        echo "<script>
            alert('Email tersebut sudah didaftar');
            window.location.href = 'DaftarMasuk.php'; 
        </script>";
    } else {
        die($mysqli->error . " " . $mysqli->errno);
    }
}


?>




