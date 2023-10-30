<!DOCTYPE html>
<html>
<head>
    <title>Borang Print</title>
    <link rel="stylesheet" type="text/css" href="cetak.css">
</head>
<body>
<header>
    <h1>Borang Pengesahan Ahli Koperasi PTSS</h1>
</header>

<section class="content">
    <img src="image/BorangAhli.jpeg" alt="Borang Image" class="bordered-image">
    <button id="print-button" onclick="printPage()">Print</button>
</section>

<footer>
    &copy; 2023 Your Company Name. All rights reserved.
</footer>

<script>
    function printPage() {
        window.print();
    }
</script>
</body>
</html>
