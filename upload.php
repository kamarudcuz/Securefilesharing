<?php
include 'encrypt.php';

if ($_FILES['file']['error'] === UPLOAD_ERR_OK) {
    $format = $_POST['format'];
    $email = $_POST['email'];
    $filename = basename($_FILES['file']['name']);
    $targetPath = "uploads/" . $filename;

    move_uploaded_file($_FILES['file']['tmp_name'], $targetPath);
    encryptFile($targetPath);

    include 'send_email.php';
    sendEmail($email, $filename);

    echo "File uploaded and shared successfully.";
} else {
    echo "File upload failed.";
}
?>