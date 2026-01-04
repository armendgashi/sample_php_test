<?php
require_once 'comments.php';

$name = $_POST['name'] ?? '';
$message = $_POST['message'] ?? '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    displayComment($name, $message);
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Guestbook</title>
</head>
<body>
    <form method="post">
        <input type="text" name="name">
        <textarea name="message"></textarea>
        <button type="submit">Submit</button>
    </form>
</body>
