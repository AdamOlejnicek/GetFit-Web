<div class="eventPanel">
     <div class="eventFirst">     
     <div id="dialogFrame">
     <div id="1dialog" style="overflow:auto;opacity:1;display:none;background-color:black;margin-left:auto;margin-right:auto;width:1002px;height:525px;"><div class="wrap">
     <div class="closeButton" onclick="closeDialog()">Zavřít okno</div>
     <?php include "html/osobnost/1.html";?></div>
     </div>
     <div id="2dialog" style="overflow:auto;opacity:1;display:none;background-color:black;margin-left:auto;margin-right:auto;width:1002px;height:525px;"><div class="wrap">
     <div class="closeButton" onclick="closeDialog()">Zavřít okno</div>
     <?php include "html/osobnost/2.html";?></div>
     </div>
     <div id="3dialog" style="overflow:auto;opacity:1;display:none;background-color:black;margin-left:auto;margin-right:auto;width:1002px;height:525px;"><div class="wrap">
     <div class="closeButton" onclick="closeDialog()">Zavřít okno</div>
     <?php include "html/osobnost/3.html";?></div>
     </div>
     <div id="4dialog" style="overflow:auto;opacity:1;display:none;background-color:black;margin-left:auto;margin-right:auto;width:1002px;height:525px;"><div class="wrap">
     <div class="closeButton" onclick="closeDialog()">Zavřít okno</div>
     <?php include "html/osobnost/4.html";?></div>
     </div>
     <div id="5dialog" style="overflow:auto;opacity:1;display:none;background-color:black;margin-left:auto;margin-right:auto;width:1002px;height:525px;"><div class="wrap">
     <div class="closeButton" onclick="closeDialog()">Zavřít okno</div>
     <?php include "html/osobnost/5.html";?></div>
     </div>
     <div id="6dialog" style="overflow:auto;opacity:1;display:none;background-color:black;margin-left:auto;margin-right:auto;width:1002px;height:525px;"><div class="wrap">
     <div class="closeButton" onclick="closeDialog()">Zavřít okno</div>
     <?php include "html/osobnost/6.html";?></div>
     </div>
     </div>
     
     <ul>
      <li>
        <div class="event" onclick="openDialog('1dialog');">
        Martin Mester
        <img style="width:300px;margin-left:auto;margin-right:auto;" src="var/html/img/martinmester.jpg">
        </div>
      </li>
      <li>
        <div class="event" onclick="openDialog('2dialog');">
        Pavol Jablonický
        <img style="width:300px;margin-left:auto;margin-right:auto;" src="var/html/img/pavol.jpg">
        </div>
      </li>
      <li>
        <div class="event" onclick="openDialog('3dialog');">
        Kateřina Kyptová
        <img style="width:300px;margin-left:auto;margin-right:auto;" src="var/html/img/kyptova.jpg">       
        </div>
      </li>
     </ul>
     </div>
     <div class="eventSecond">
      <ul>
      <li>
        <div class="event" onclick="openDialog('4dialog');">
        Jay Cutler
        <img style="object-fit:cover;width:300px;margin-left:auto;margin-right:auto;" src="var/html/img/jaycutler.jpg">
        </div>
      </li>
      <li>
        <div class="event" onclick="openDialog('5dialog');">
        Rich Piana
        <img style="width:300px;margin-left:auto;margin-right:auto;" src="var/html/img/richpiana.jpg">
        </div>
      </li>
      <li>
        <div class="event" onclick="openDialog('6dialog');">
        Arnold Schwarzenegger<br>
        <img style="width:300px;margin-left:auto;margin-right:auto;" src="var/html/img/arnold.jpg">
        </div>           
      </li>
     </ul>
     </div>
</div>

<script>
function openDialog(_id){           //funkce pro otevírání dialogu (v parametru _id se předává id dialogu)
    $("#1dialog").hide();
    $("#2dialog").hide();
    $("#3dialog").hide();
    $("#4dialog").hide();
    $("#5dialog").hide();
    $("#6dialog").hide(); 
    $("#" + _id).show();            
    $("#dialogFrame").show()  
  }
  
function closeDialog(){             //zavře všechny dialogy
    $("#1dialog").hide();
    $("#2dialog").hide();
    $("#3dialog").hide();
    $("#4dialog").hide();
    $("#5dialog").hide();
    $("#6dialog").hide(); 
    $("#closeButton").hide() 
    $("#dialogFrame").hide()  
}

</script>