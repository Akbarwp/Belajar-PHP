<?php
    // Cek tombol Login
    if(isset($_POST["submit"])) {
        // Cek username & password
        if($_POST["username"] == "admin" && $_POST["password"] == "123") {
            header("Location: Admin.php");
            exit;
        } else {
            // Jika benar, maka lanjut
            $error = true;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Login Admin</h1>
    <ul>
        <?php if(isset($error)): ?>
            <p style="color: red; font-style: italic;">username atau password salah!!!</p>
        <?php endif; ?>
        <form action="" method="post">
            <li>
                <label for="username">Username: </label>
                <input type="text" name="username" id="username">
            </li>
            <li>
                <label for="password">Password: </label>
                <input type="password" name="password" id="password">
            </li>
            <li>
                <button type="submit" name="submit">Login</button>
            </li>
        </form>
    </ul>
</body>
</html>