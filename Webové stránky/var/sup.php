<div class="offerPanel">
  <div class="offerMenu">
  <ul>
    <li id="coS" class="nactive" onclick="coSup();">Co to je?</li>
    <li id="proS" class="nactive" onclick="proSup();">Protein</li> 
    <li id="gluS" class="nactive" onclick="gluSup();">Glutamin</li>
    <li id="kreS" class="nactive" onclick="kreSup();">Kreatin</li>
    <li id="gaiS" class="nactive" onclick="gaiSup();">Gainer</li>
    <li id="sterS" class="nactive" onclick="sterSup();">Náharada steroidů</li> 
    <li id="nabiS" class="nactive" onclick="nabiSup();">Nabízíme</li> 
  </ul>           
  </div>
  <div class="offerWindow">
    <div class="hidden" id="coS">
      <p class="p_main">
        <?php include "html/suplementy/cotoje.html";?> 
      </p>
    </div>
    <div class="hidden" id="proS">
      <p class="p_main">
       <?php include "html/suplementy/protein.html";?> 
      </p>
    </div>
    <div class="hidden" id="gluS">
      <p class="p_main">
      <?php include "html/suplementy/glutamin.html";?> 
      </p>
    </div>
    <div class="hidden" id="kreS">
      <p class="p_main">
      <?php include "html/suplementy/kreatin.html";?> 
      </p>
    </div>
    <div class="hidden" id="gaiS">
      <p class="p_main">
      <?php include "html/suplementy/gainer.html";?> 
      </p>    
    </div>
    <div class="hidden" id="sterS">
      <p class="p_main">
      <?php include "html/suplementy/steroidy.html";?> 
      </p>
    </div>
    <div class="hidden" id="nabiS">
      <p class="p_main">
      <?php include "php/nabidka.php";?> 
      </p>
    </div>
  </div>
</div>

<script>
function coSup(){
$("li[class='active']").removeClass("active").addClass("nactive");
$("li[id='coS']").removeClass("nactive").addClass("active");
$("div[class='visible']").removeClass("visible").addClass("hidden");
$("div[id='coS']").removeClass("hidden").addClass("visible");
}

function proSup(){
$("li[class='active']").removeClass("active").addClass("nactive");
$("li[id='proS']").removeClass("nactive").addClass("active");
$("div[class='visible']").removeClass("visible").addClass("hidden");
$("div[id='proS']").removeClass("hidden").addClass("visible");
}

function gluSup(){
$("li[class='active']").removeClass("active").addClass("nactive");
$("li[id='gluS']").removeClass("nactive").addClass("active");
$("div[class='visible']").removeClass("visible").addClass("hidden");
$("div[id='gluS']").removeClass("hidden").addClass("visible");
}

function kreSup(){
$("li[class='active']").removeClass("active").addClass("nactive");
$("li[id='kreS']").removeClass("nactive").addClass("active");
$("div[class='visible']").removeClass("visible").addClass("hidden");
$("div[id='kreS']").removeClass("hidden").addClass("visible");
}

function gaiSup(){
$("li[class='active']").removeClass("active").addClass("nactive");
$("li[id='gaiS']").removeClass("nactive").addClass("active");
$("div[class='visible']").removeClass("visible").addClass("hidden");
$("div[id='gaiS']").removeClass("hidden").addClass("visible");
}

function sterSup(){
$("li[class='active']").removeClass("active").addClass("nactive");
$("li[id='sterS']").removeClass("nactive").addClass("active");
$("div[class='visible']").removeClass("visible").addClass("hidden");
$("div[id='sterS']").removeClass("hidden").addClass("visible");
}

function nabiSup(){
$("li[class='active']").removeClass("active").addClass("nactive");
$("li[id='nabiS']").removeClass("nactive").addClass("active");
$("div[class='visible']").removeClass("visible").addClass("hidden");
$("div[id='nabiS']").removeClass("hidden").addClass("visible");
}


</script>
