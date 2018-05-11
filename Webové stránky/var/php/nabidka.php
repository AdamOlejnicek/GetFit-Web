<?php
define('DB_SERVER_L', 'inprogres.cz');                      // Připojení k MySQL
define('DB_USERNAME_L', 'adam');                  //jméno
define('DB_PASSWORD_L', 'asdasdasd');             //gen heslo - tento účet umí jen číst a udělat update buňky takže neudělá moc škody
define('DB_DATABASE_L', 'adam');                          //výběr DB
$db = mysqli_connect(DB_SERVER_L, DB_USERNAME_L, DB_PASSWORD_L, DB_DATABASE_L);
mysqli_query($db, "SET NAMES UTF8");


$sql  = 'SELECT * FROM `sup`';
$query = mysqli_query($db, $sql);
$rows_count = mysqli_num_rows($query); //počet záznamů v query

for ($i = 0; $i < $rows_count; $i++){
  $arr = mysqli_fetch_array($query);
  drawItem($arr["name"], $arr["price"], $arr["weight"], $arr["description"], $arr["img"]);
}


function drawItem($name, $price, $weight, $description, $img){
echo "<br>";
echo "<div class='item'>";                  
echo "<img style='margin-right:20px;float:left;width:100px;' src='var/html/img/sup/" . $img . "'>";
echo $name . " " . $weight . "g";
echo "<br>";
echo $price . ",- Kč";
echo "<br>";
echo $description;
echo "</div>";
}

?>

