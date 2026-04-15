<?php include 'header.php'; ?>
<link rel="stylesheet" href="style.css">
<h2>Prihlásenie</h2>

<form method="POST">
    <input type="text" name="username" placeholder="Meno"><br>
    <input type="password" name="password" placeholder="Heslo"><br>
    <button type="submit">Prihlásiť sa</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    header("Location: index.php");
    exit();
}
?>

<?php include 'footer.php'; ?>