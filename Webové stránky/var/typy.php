<div class="offerPanel">
  <div class="offerMenu">
  <ul>
    <li id="coT" class="nactive" onclick="coTyp();">Co to je?</li>
    <li id="ektoT" class="nactive" onclick="ektoTyp();">Ektomorf</li> 
    <li id="mesoT" class="nactive" onclick="mesoTyp();">Mezomorf</li>
    <li id="endoT" class="nactive" onclick="endoTyp();">Endomorf</li>
  </ul>           
  </div>
  <div class="offerWindow">
    <div class="hidden" id="coT">
      <p>
        <?php include "html/somatotyp/cotoje.html";?>
      </p>
    </div>
    <div class="hidden" id="ektoT">
      <p>
       <?php include "html/somatotyp/ektomorf.html";?> 
      </p>
    </div>
    <div class="hidden" id="mesoT">
      <p>
        <?php include "html/somatotyp/mezomorf.html";?>
      </p>
    </div>
    <div class="hidden" id="endoT">
      <p>
       <?php include "html/somatotyp/endomorf.html";?>
      </p>
    </div>
    </div>
  </div>
</div>

<script>
function coTyp(){
$("li[class='active']").removeClass("active").addClass("nactive");
$("li[id='coT']").removeClass("nactive").addClass("active");
$("div[class='visible']").removeClass("visible").addClass("hidden");
$("div[id='coT']").removeClass("hidden").addClass("visible");
}

function ektoTyp(){
$("li[class='active']").removeClass("active").addClass("nactive");
$("li[id='ektoT']").removeClass("nactive").addClass("active");
$("div[class='visible']").removeClass("visible").addClass("hidden");
$("div[id='ektoT']").removeClass("hidden").addClass("visible");
}

function mesoTyp(){
$("li[class='active']").removeClass("active").addClass("nactive");
$("li[id='mesoT']").removeClass("nactive").addClass("active");
$("div[class='visible']").removeClass("visible").addClass("hidden");
$("div[id='mesoT']").removeClass("hidden").addClass("visible");
}

function endoTyp(){
$("li[class='active']").removeClass("active").addClass("nactive");
$("li[id='endoT']").removeClass("nactive").addClass("active");
$("div[class='visible']").removeClass("visible").addClass("hidden");
$("div[id='endoT']").removeClass("hidden").addClass("visible");
}

</script>
