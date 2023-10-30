function confirmLogout() {
    var confirmLogout = confirm("Adakah anda pasti untuk log keluar?");

    if (confirmLogout) {
        window.location.href = "LogKeluar.php";
    }
}

