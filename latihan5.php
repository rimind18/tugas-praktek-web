<?php
// Inisialisasi variabel error dan status login
$error = "";
$isLoginSuccess = false;

// Proses saat form disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Cek kredensial
    if ($username === "admin" && $password === "123") {
        $isLoginSuccess = true;
    } else {
        $error = "Username atau Password salah!!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Admin</title>
</head>
<body>
<?php if ($isLoginSuccess): ?>
    <h2>Selamat Datang, Admin</h2>
    <p>Ini adalah halaman admin</p>
    <form method="post">
        <button type="submit">Logout</button>
    </form>
<?php else: ?>
    <h2>Login</h2>

    <?php if ($error): ?>
        <p style="color: red;"><?php echo $error; ?></p>
    <?php endif; ?>

    <form method="post">
        <label>Username</label><br>
        <input type="text" name="username" required><br><br>

        <label>Password</label><br>
        <input type="password" name="password" required><br><br>

        <button type="submit">Log In</button>
    </form>
<?php endif; ?>
</body>
</html>