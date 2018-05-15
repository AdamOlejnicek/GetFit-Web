      <div class="contactSide">          
        <div id="contactPos">
        <p>            
            <?php
            include "html/kdojsme/kdojsme.html";            
            ?>
        </p>                               
        </div>                  
      </div>
      
      <div class="coms">
        <div class="comsBox"> 
<?php
define('DB_SERVER_L', 'inprogres.cz');                    // Připojení k MySQL
define('DB_USERNAME_L', 'adam');                          //jméno
define('DB_PASSWORD_L', 'asdasdasd');                     //gen heslo - tento účet umí jen číst a udělat update buňky takže neudělá moc škody
define('DB_DATABASE_L', 'adam');                          //výběr DB
$db = mysqli_connect(DB_SERVER_L, DB_USERNAME_L, DB_PASSWORD_L, DB_DATABASE_L);
mysqli_query($db, "SET NAMES UTF8");


$sql  = 'SELECT * FROM `coms` ORDER BY `id` DESC';
$query = mysqli_query($db, $sql);
$rows_count = mysqli_num_rows($query);                    //počet záznamů v query

for ($i = 0; $i < $rows_count; $i++){
  $arr = mysqli_fetch_array($query);
  drawCom($arr["name"], $arr["coment"], $arr["time"]);
}


function drawCom($name, $com, $time){
echo "<div class='koment'>";
echo "<b>" . $name . "</b>  |  " . $time . "<br>" . $com;
echo "</div>";
}

?>
        </div>
        <div class="comsAdd">
        <form action="var/php/coms.php" method="POST">
          <div id="nameSend">Jméno:<input type="text" name="name"></div>
          <input id="komentSend" type="text" name="text">
          <button>Pošli</button>       
        </form>
        </div>        
      </div>
