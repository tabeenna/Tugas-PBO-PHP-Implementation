<?php
class User {
    private $firstname;
    private $lastname;
    private $phone;
    private $address;

    public function __construct($firstname, $lastname, $phone, $address) {
        $this->firstname = htmlspecialchars($firstname);
        $this->lastname = htmlspecialchars($lastname);
        $this->phone = htmlspecialchars($phone);
        $this->address = htmlspecialchars($address);
    }

    public function displayResult() {
        return "
            <div class='result-page'>
                <p><b>First Name:</b> {$this->firstname}</p>
                <p><b>Last Name:</b> {$this->lastname}</p>
                <p><b>Phone Number:</b> {$this->phone}</p>
                <p><b>Address:</b> " . nl2br($this->address) . "</p>
            </div>
        ";
    }
}

$output = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userBaru = new User(
        $_POST['firstname'] ?? '', 
        $_POST['lastname'] ?? '', 
        $_POST['phone'] ?? '', 
        $_POST['address'] ?? ''
    );
    
    $output = $userBaru->displayResult();
} else {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Input - Tugas PBO</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="card">
        <h2>Data Terkirim</h2>
        
        <?php echo $output; ?>

        <a href="index.php" class="btn-back" style="margin-top: 15px;">Kembali</a>
    </div>

</body>
</html>