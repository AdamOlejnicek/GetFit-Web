<div class="offerPanel">
  <div class="offerMenu">
  <ul>
    <li id="hruC" class="nactive" onclick="hruCvi();">Hrudník</li>
    <li id="zadC" class="nactive" onclick="zadCvi();">Záda</li> 
    <li id="bicC" class="nactive" onclick="bicCvi();">Biceps</li>
    <li id="triC" class="nactive" onclick="triCvi();">Triceps</li>
    <li id="preC" class="nactive" onclick="preCvi();">Předloktí</li>
    <li id="ramC" class="nactive" onclick="ramCvi();">Ramena</li> 
    <li id="nohC" class="nactive" onclick="nohCvi();">Nohy</li> 
  </ul>           
  </div>
  <div class="offerWindow">
    <div class="hidden" id="hruC">
        <div class="text"> 
        <?php include "html/technika/hrudnik.html";?>
        </div> 
    </div>
    <div class="hidden" id="zadC"> 
        <div class="text"> 
        <?php include "html/technika/zada.html";?>
        </div> 
    </div>
    <div class="hidden" id="bicC">
        <div class="text">  
        <?php include "html/technika/biceps.html";?>
        </div> 
    </div>
    <div class="hidden" id="triC">
        <div class="text">  
        <?php include "html/technika/triceps.html";?>
        </div>  
    </div>
    <div class="hidden" id="preC">
        <div class="text">  
        <?php include "html/technika/predlokti.html";?>
        </div>    
    </div>
    <div class="hidden" id="ramC">
        <div class="text"> 
        <?php include "html/technika/ramena.html";?>
        </div> 
    </div>
    <div class="hidden" id="nohC">
        <div class="text"> 
        <?php include "html/technika/nohy.html";?>
        </div> 
    </div>
  </div>
</div>

<script>
function hruCvi(){
$("li[class='active']").removeClass("active").addClass("nactive");
$("li[id='hruC']").removeClass("nactive").addClass("active");
$("div[class='visible']").removeClass("visible").addClass("hidden");
$("div[id='hruC']").removeClass("hidden").addClass("visible");
}

function zadCvi(){
$("li[class='active']").removeClass("active").addClass("nactive");
$("li[id='zadC']").removeClass("nactive").addClass("active");
$("div[class='visible']").removeClass("visible").addClass("hidden");
$("div[id='zadC']").removeClass("hidden").addClass("visible");
}

function bicCvi(){
$("li[class='active']").removeClass("active").addClass("nactive");
$("li[id='bicC']").removeClass("nactive").addClass("active");
$("div[class='visible']").removeClass("visible").addClass("hidden");
$("div[id='bicC']").removeClass("hidden").addClass("visible");
}

function triCvi(){
$("li[class='active']").removeClass("active").addClass("nactive");
$("li[id='triC']").removeClass("nactive").addClass("active");
$("div[class='visible']").removeClass("visible").addClass("hidden");
$("div[id='triC']").removeClass("hidden").addClass("visible");
}

function preCvi(){
$("li[class='active']").removeClass("active").addClass("nactive");
$("li[id='preC']").removeClass("nactive").addClass("active");
$("div[class='visible']").removeClass("visible").addClass("hidden");
$("div[id='preC']").removeClass("hidden").addClass("visible");
}

function ramCvi(){
$("li[class='active']").removeClass("active").addClass("nactive");
$("li[id='ramC']").removeClass("nactive").addClass("active");
$("div[class='visible']").removeClass("visible").addClass("hidden");
$("div[id='ramC']").removeClass("hidden").addClass("visible");
}

function nohCvi(){
$("li[class='active']").removeClass("active").addClass("nactive");
$("li[id='nohC']").removeClass("nactive").addClass("active");
$("div[class='visible']").removeClass("visible").addClass("hidden");
$("div[id='nohC']").removeClass("hidden").addClass("visible");
}


</script>
