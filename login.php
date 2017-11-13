
<?php
	include_once("bd.php");
if (isset($_POST['login'])){
    $login = $_POST['login']; 
    if ($login == '') {
        unset($login);
        exit ("Введите пожалуйста логин!");
    } 
}
if (isset($_POST['password'])){
    $password = $_POST['password']; 
    if ($password == '') {
        unset($password);
        exit ("Введите пароль");
    }
}
$login = stripslashes($login);
$login = htmlspecialchars($login);
$password = stripslashes($password);
$password = htmlspecialchars($password);

$login = trim($login);
$password = trim($password);
$user = mysql_query("SELECT * FROM reg WHERE login='$login' AND password='$password'");
$row = mysql_fetch_array($user);
if (empty($row['id'])){
    exit ("Извините, введённый вами логин или пароль неверный.");
}
else {
    $_SESSION['password'] = $password; 
    
    $_SESSION['login'] = $login; 
    $_SESSION['id'] = $row['id']; 
    echo "Вы успешно вошли в систему";
}
//echo "<meta http-equiv='Refresh' content='0; URL=index.php'>";
?>
