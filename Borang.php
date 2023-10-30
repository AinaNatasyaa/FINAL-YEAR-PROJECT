<?php
// Initialize variables
$shares = 0;
$sharePrice = 20.00;
$registrationFee = 5.00;
$totalAmount = 0; // Initialize $totalAmount to 0

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the number of shares from the form
    $shares = isset($_POST["shares"]) ? intval($_POST["shares"]) : 0;

    // Calculate the total amount
    $totalAmount = ($shares * $sharePrice) + $registrationFee;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Permohonan Menjadi Ahli</title>
    <link rel="stylesheet" href="Borang.css">
</head>
<body>
<img src="image/logo.PNG" ><br>
<div class="container">
    <div class="box form-box">
        <center>
            <div class="ahli">
                <b><u>PERMOHONAN MENJADI AHLI <br>(Undang-undang Kecil 11)</u></b>
            </div>
        </center>

        <div class="alamat">
            <p >Alamat: Koperasi Politeknik Tuanku Syed Sirajuddin Perlis Berhad Pauh Putra, 02600 Arau Perlis.</p><br>
            <p>Tarikh: <?php echo date('d/m/Y'); ?></p><br>

            <p>Setiausaha, Koperasi Politeknik Tuanku Syed Sirajuddin Perlis Berhad</p><br>

            <p>Tuan,</p>
        </div>

        <form class="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" onsubmit="return validateForm()">
            <label for="full_name"> Nama penuh:</label> &emsp; &emsp;
            <input type="text" id="full_name" class="inline-block" required><br><br>

            <label for="ic_number">No K/P:</label> &emsp; &emsp; &emsp;
            <input type="text" id="ic_number" class="inline-block" required><br><br>

            <label for="nationality">Warganegara:</label> &emsp;
            <input type="text" id="nationality" class="inline-block"required><br><br>

            <label for="religion_ethnicity">Agama/Bangsa:</label>
            <input type="text" id="religion_ethnicity"  class="inline-block"required><br><br>

            <label for="occupation"> Pekerjaan:</label> &emsp;
            <input type="text" id="occupation" class="inline-block" required><br><br>

            <lable for="job_title"> Jabatan:</lable><br>
            <select name="state"  class="inline-block" required>
                <option value="">--Select--</option>
                <option value="JTMK">JTMK</option>
                <option value="JP" >JP</option>
                <option value="JRKV" >JRKV</option>
                <option value="JKE">JKE</option>
                <option value="JKM" >JKM</option>
                <option value="JPH" >JPH</option>
                <option value="JMSK">JMSK</option>
                <option value="JPA" >JPA</option>
            </select><br><br>

            <label for="phone_number"> No. Telefon:</label> &emsp;
            <input type="tel" id="phone_number" class="inline-block" required><br><br>

            <label for="address">Alamat Tetap:</label>
            <textarea id="address" name="address"  class="inline-block" required></textarea><br><br>


            <label for="shares">2. Bilangan unit saham (minima 1 unit)</label>
            <input type="number" id="shares" name="shares" min="1" required value="<?php echo $shares; ?>">
        </form>

        <br>
        <div class="total">
            <p id="yuran">Yuran: RM <?php echo $registrationFee; ?></p>
            <p id="saham">Saham*: RM <?php echo ($shares * $sharePrice); ?></p>
            <p id="jumlah">Jumlah: RM <?php echo $totalAmount; ?></p>
        </div>

        <script>
            // Function to recalculate and update the total
            function updateTotal() {
                var shares = parseFloat(document.getElementById("shares").value);
                var registrationFee = <?php echo $registrationFee; ?>;

                var totalAmount = shares * <?php echo $sharePrice; ?> + registrationFee;

                // Update the displayed values
                document.getElementById("saham").innerHTML = "Saham*: RM " + (shares * <?php echo $sharePrice; ?>).toFixed(2);
                document.getElementById("jumlah").innerHTML = "Jumlah: RM " + totalAmount.toFixed(2);
            }

            // Add event listener to the "shares" input field
            document.getElementById("shares").addEventListener("input", updateTotal);

            // Initial update when the page loads
            updateTotal();
        </script>

        <br>

        <div class="sign">
            <p>Yang Benar,</p><br>
            <p>......................................................</p>
            <p>(Tandatangan Pemohon)</p>
            <p><i>*Bilangan unit saham minima = 1 unit (RM 20.00)<i></p>
            <p><i>*Jumlah minima perlu dibayar = RM 20.00 (saham) + RM 5.00 (yuran pendaftaran)</i></p>

        </div>
    </div>
</div>
<div class="field">
    <a href="anggota.php"><input type="submit" class="btn" value="Submit" required></a>
</div>
<script>
    // Function to validate the form
    function validateForm() {
        var fullName = document.getElementById("full_name").value;
        var icNumber = document.getElementById("ic_number").value;
        var nationality = document.getElementById("nationality").value;
        var religionEthnicity = document.getElementById("religion_ethnicity").value;
        var occupation = document.getElementById("occupation").value;
        var jobTitle = document.getElementById("job_title").value;
        var phoneNumber = document.getElementById("phone_number").value;
        var address = document.getElementById("address").value;
        var shares = document.getElementById("shares").value;

        // Check if any field is empty
        if (fullName === "" || icNumber === "" || nationality === "" || religionEthnicity === "" ||
            occupation === "" || jobTitle === "" || phoneNumber === "" || address === "" || shares === "") {
            alert("Please complete all fields before submitting.");
            return false;
        }

        // Add more specific validations here as needed
        // For example, you can validate the format of the phone number or other specific requirements

        // Validate shares as a number greater than or equal to 1
        if (isNaN(shares) || shares < 1) {
            alert("Please enter a valid number of shares (minimum 1 unit).");
            return false;
        }

        // If all validation passes, return true to submit the form
        alert("Successfully Registered");
        return true;
    }
</script>

</body>
</html>