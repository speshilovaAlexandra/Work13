<?php
include("../settings/connect_datebase.php");
$sql = "SELECT * FROM users";
$result = $mysqli->query($sql);
while($row = $result->fetch_assoc()) {
    echo "Логин: " . htmlspecialchars($row['login']) . "\n";
    echo "Пароль: " . htmlspecialchars($row['password']). "\n" ;
}
?>