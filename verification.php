﻿<?php
include_once("bd.php");

if (isset($_POST['submit'])){
    if(empty($_POST['login']))  {
    echo '<br><font color="red"><alt="Введите логин"> Введите логин!</font>';
} 
elseif (!preg_match("/^\w{3,}$/", $_POST['login'])) {
echo '<br><font color="red"><alt="В поле "Логин" введены недопустимые символы!">В поле "Логин" введены недопустимые символы! Только буквы, цифры и подчеркивание!</font>';
}
elseif(empty($_POST['password'])) {
echo '<br><font color="red"><alt="Введите пароль !">Введите пароль!</font>';
}
elseif (!preg_match("/\A(\w){6,20}\Z/", $_POST['password'])) {
echo '<br><font color="red"><alt="Пароль слишком короткий!">Пароль слишком короткий! Пароль должен быть не менее 6 символов! </font>';
}
elseif(empty($_POST['password2'])) {
echo '<br><font color="red"><alt="Введите подтверждение пароля!">Введите подтверждение пароля!</font>';
}
elseif($_POST['password'] != $_POST['password2']) {
echo '<br><font color="red"><alt="Введенные пароли не совпадают!">Введенные пароли не совпадают!</font>';
}
elseif(empty($_POST['email'])) {
echo '<br><font color="red"><alt="Введите E-mail!">Введите E-mail! </font>';
}
elseif (!preg_match("/^[a-zA-Z0-9_\.\-]+@([a-zA-Z0-9\-]+\.)+[a-zA-Z]{2,6}$/", $_POST['email'])) {
echo '<br><font color="red"><alt="E-mail имеет недопустимий формат!">E-mail имеет недопустимий формат! Например, name@gmail.com! </font>';
}

else{
$login = $_POST['login'];
$password = $_POST['password'];
$password2 = $_POST['password2'];
$email = $_POST['email'];
$rdate = date("Y-m-d H:i:s");
$name = $_POST['name'];
$lastname = $_POST['lastname'];  

$query = ("SELECT id FROM reg WHERE login='$login'");
$sql = mysql_query($query) or die(mysql_error());

if (mysql_num_rows($sql) > 0) {
echo '<font color="red"><alt="Пользователь с таким логином зарегистрированый!">Пользователь с таким логином зарегистрирован!</font>';
}
else {
$query2 = ("SELECT id FROM reg WHERE password='$password'");
$sql = mysql_query($query2) or die(mysql_error());
if (mysql_num_rows($sql) > 0){
echo '<font color="red"><alt="Пользователь с таким e-mail зарегистрированый!">Пользователь с таким e-mail уже зарегистрирован!</font>';
}
else{
$query = "INSERT INTO reg (login, password, email, reg_date, name_user, lastname )
VALUES ('$login', '$password', '$email', '$rdate', '$name', '$lastname')";
$result = mysql_query($query) or die(mysql_error());;
echo '<font color="green"><alt="Вы успешно зарегистрировались!">Вы успешно зарегистрировались!</font><br><a href="index.php">На главную</a>';
}
}
}
}
?>
