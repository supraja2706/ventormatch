<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $about = $_POST['about'];

    $photoName = time() . "_" . $_FILES['photo']['name'];
    $photoTmp  = $_FILES['photo']['tmp_name'];

    $resumeName = time() . "_" . $_FILES['resume']['name'];
    $resumeTmp  = $_FILES['resume']['tmp_name'];

    $photoPath  = "uploads/photos/" . $photoName;
    $resumePath = "uploads/resumes/" . $resumeName;

    if (
        move_uploaded_file($photoTmp, $photoPath) &&
        move_uploaded_file($resumeTmp, $resumePath)
    ) {
        echo "✅ Upload successful";
    } else {
        echo "❌ Upload failed";
    }
}
?>
