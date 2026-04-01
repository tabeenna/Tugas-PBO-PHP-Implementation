<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input PBO</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="card">
        <h2>Form Input Data</h2>
        <form action="process.php" method="POST">
            
            <label for="firstname">First Name</label>
            <input type="text" id="firstname" name="firstname" required placeholder="Masukkan nama depan">

            <label for="lastname">Last Name</label>
            <input type="text" id="lastname" name="lastname" required placeholder="Masukkan nama belakang">

            <label for="phone">Phone Number</label>
            <input type="text" id="phone" name="phone" required placeholder="Masukkan nomor telepon">

            <label for="address">Address</label>
            <textarea id="address" name="address" rows="3" required placeholder="Masukkan alamat lengkap"></textarea>

            <button type="submit">Submit Data</button>
        </form>
    </div>

</body>
</html>