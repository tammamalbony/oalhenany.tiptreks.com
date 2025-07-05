<?php
session_start();
// Simple password for editing
$adminPassword = 'admin'; // change for security

// Handle login
if (isset($_POST['password'])) {
    if ($_POST['password'] === $adminPassword) {
        $_SESSION['authenticated'] = true;
    } else {
        $error = 'Invalid password';
    }
}

// Handle save
if (isset($_POST['code']) && isset($_SESSION['authenticated']) && $_SESSION['authenticated']) {
    file_put_contents('user_data.php', $_POST['code']);
    $message = 'File saved successfully';
}

if (!isset($_SESSION['authenticated']) || !$_SESSION['authenticated']) {
    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <title>Login</title>
    </head>
    <body>
        <form method="post">
            <label>Password: <input type="password" name="password"></label>
            <button type="submit">Login</button>
            <?php if (isset($error)) echo '<p style="color:red">'.htmlspecialchars($error).'</p>'; ?>
        </form>
    </body>
    </html>
    <?php
    exit;
}

$code = file_get_contents('user_data.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Edit user_data.php</title>
</head>
<body>
<?php if (isset($message)) echo '<p style="color:green">'.htmlspecialchars($message).'</p>'; ?>
<form method="post">
    <textarea name="code" rows="30" cols="100"><?php echo htmlspecialchars($code); ?></textarea>
    <br>
    <button type="submit">Save</button>
</form>
</body>
</html>
