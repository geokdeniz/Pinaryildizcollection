<?php
// Formdan gelen veriler
$name = isset($_POST['name']) ? trim($_POST['name']) : '';
$email = isset($_POST['email']) ? trim($_POST['email']) : '';
$subject = isset($_POST['subject']) ? trim($_POST['subject']) : '';
$message = isset($_POST['message']) ? trim($_POST['message']) : '';

// Hedef e-posta adresi
$to = "legendisback28@gmail.com";

// E-posta başlığı
$headers = "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

// Mesaj formatı
$email_body = "Ad: $name\n";
$email_body .= "E-Posta: $email\n";
$email_body .= "Konu: $subject\n";
$email_body .= "Mesaj:\n$message\n";

// E-posta gönderimi
if (mail($to, $subject, $email_body, $headers)) {
    // Başarılı gönderim
    echo "OK";
} else {
    // Hata durumu
    echo "Mesaj gönderilirken bir hata oluştu. Lütfen tekrar deneyin.";
}
?>
