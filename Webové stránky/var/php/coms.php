<?php
$name = $_POST["name"];
$text = $_POST["text"];


if ($name!="" and $text!=""){
define('DB_SERVER_L', 'inprogres.cz');                      // Připojení k MySQL
define('DB_USERNAME_L', 'adam');                  //jméno
define('DB_PASSWORD_L', 'asdasdasd');             //gen heslo - tento účet umí jen číst a udělat update buňky takže neudělá moc škody
define('DB_DATABASE_L', 'adam');                          //výběr DB
$db = mysqli_connect(DB_SERVER_L, DB_USERNAME_L, DB_PASSWORD_L, DB_DATABASE_L);
mysqli_query($db, "SET NAMES UTF8");


$sql  = "INSERT INTO `coms` (`id`, `time`, `coment`, `name`) VALUES (NULL, CURRENT_TIMESTAMP,'" . $text . "','" . $name . "')";
$query = mysqli_query($db, $sql);
header('Location: /adam/index.php#contact');
} else {
Echo "Musíte něco napsat...";
}


?>