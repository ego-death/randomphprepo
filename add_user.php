<?php
include_once("connect.php");
$sql = "INSERT INTO `users` (`age`, `name`, `email`) VALUES ('37', 'dsaasdsa', 'dasdsa@gmail.com')";

echo var_dump($sql);

if ($conn->query($sql) == true) {
    header('Location: index.php?msg="Successful insertion');
} else {
    echo "Not working";
}
?>