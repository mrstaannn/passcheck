<html>
<head>
</head>
<body>
<form action="index.php" method="post">
    <input type="password" name="password"><br>
    <input type="text" name="saltedpassword" autocomplete="off"><br>
    <input type="submit" name="send">
</form>
</body>
</html>

<?php
if(!isset($_POST['send'])){
    return 0;
}

if (password_verify($_POST['password'], $_POST['saltedpassword'])) {
    echo 'Password is valid!';
} else {
    echo 'Invalid password.';
}
?>