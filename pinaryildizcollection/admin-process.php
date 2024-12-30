<?php
// Doğru kullanıcı adı ve şifre
$valid_username = "geokdeniz";
$valid_password = "araba123";

// Formdan gelen veriler
$username = isset($_POST['username']) ? trim($_POST['username']) : '';
$password = isset($_POST['password']) ? trim($_POST['password']) : '';

// Giriş kontrolü
if ($username === $valid_username && $password === $valid_password) {
    // Giriş başarılıysa indexa.html sayfasına yönlendir
    header("Location: indexa.html");
    exit();
} else {
    // Giriş başarısızsa hata mesajı ile geri yönlendir
    header("Location: admin-login.html?error=1");
    exit();
}
?>
