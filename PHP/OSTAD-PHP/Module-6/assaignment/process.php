<?php
session_start();

// Validate form inputs
if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['password']) || empty($_FILES['profile_picture']['name'])) {
    die('Please fill all fields');
}

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

// Validate email format
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    die('Invalid email format');
}

// Create unique filename for profile picture
$target_dir = 'uploads/';
$target_file = $target_dir . uniqid() . '-' . basename($_FILES['profile_picture']['name']);
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
$check = getimagesize($_FILES['profile_picture']['tmp_name']);
if ($check === false) {
    die('File is not an image.');
}

// Check file size
if ($_FILES['profile_picture']['size'] > 500000) {
    die('File is too large.');
}

// Allow only certain file formats
if ($imageFileType !== 'jpg' && $imageFileType !== 'png' && $imageFileType !== 'jpeg' && $imageFileType !== 'gif') {
    die('Only JPG, JPEG, PNG, and GIF files are allowed.');
}

// Upload file
if (!move_uploaded_file($_FILES['profile_picture']['tmp_name'], $target_file)) {
    die('Sorry, there was an error uploading your file.');
}

// Add date and time to filename
$filename_parts = pathinfo($target_file);
$new_filename = $filename_parts['filename'] . '_' . date('YmdHis') . '.' . $filename_parts['extension'];
$new_file_path = $filename_parts['dirname'] . '/' . $new_filename;
rename($target_file, $new_file_path);

// Save user data to CSV file
$data = [$name, $email, $new_filename, date('Y-m-d H:i:s')];
$fp = fopen('users.csv', 'a');
fputcsv($fp, $data);
fclose($fp);

// Set cookie
setcookie('name', $name, time() + 3600);

header('Location: users.php');
exit;
?>
