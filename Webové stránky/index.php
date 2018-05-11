<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>           
  <head>                 
    <meta http-equiv="content-type" content="text/html; charset=utf-8">                 
    <meta name="generator" content="PSPad editor, www.pspad.com">                 
    <title>Get fit</title>                 
    <link href="favicon.ico" rel="icon">                 
    <link rel="stylesheet" href="style.css">                 
    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">         
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,300,400,500,600,700&amp;subset=cyrillic,latin-ext" rel="stylesheet">    
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:700" rel="stylesheet">             
<script src="js/smooth-scroll.js"></script>                    
<script src="js//jquery.js"></script>         
  </head>                  
  <body onload="checkPos();checkPage();">                         
    <div id="stripe" class="stripemid">    
    </div>                          
    <menu class="mid">      	                                  
      <ul id = "menu" class="clearfix">                                               
        <li class="first">                                  
          <a data-scroll href='#home' class="active">Home</a>                                
        </li>                                           
        <li>                                
          <a data-scroll href="#technika" class="nactive">Technika cviku</a>                                
        </li>                                
        <li>                                
        <img class="logo">                                           
        </li>                                         
        <li>                                
          <a data-scroll href="#lidi" class="nactive">Osobnosti</a>                                
        </li>                                           
        <li>                                
          <a data-scroll href="#sup" class="nactive">Suplementy</a>                                
        </li> 
        <li>                                
          <a data-scroll href="#typy" class="nactive">Somatotypy</a>                                
        </li> 
        <li>                                
          <a data-scroll href="#contact" class="nactive">Kdo jsme</a>                                
        </li>
        <li>                                
          <a data-scroll href="login.php" class="nactive">Login</a>                                
        </li>                                             
      </ul>                                                  
    </menu>
                                                
    <div id = "home">                      
    </div>
                                          
    <div id = "technika">
      <?php include 'var/technika.php'?>                        
    </div> 
                                         
    <div id = "lidi">        
      <?php include 'var/osobnosti.php'?>                    
    </div> 
                                         
    <div id = "sup">                        
      <?php include 'var/sup.php';?>                      
    </div>
    
    <div id = "typy">                        
      <?php include 'var/typy.php';?>                      
    </div> 
    
    <div id = "contact">                        
      <?php include 'var/contact.php';?>                      
    </div>
                  
                                                    
  </body>                  
<script>
	   var scroll = new SmoothScroll('a[href*="#"]');
    
    $(document).on("scroll",function(){
      checkPos();
    }); 
     
    $(document).on("scroll",function(){
      checkPage();
 
    }); 
    
    function checkPage(){         
    if($(document).scrollTop()<100){
      $("a[class='active']").removeClass("active").addClass("nactive"); 
      $("a[href='#home']").removeClass("nactive").addClass("active");  
    }  else if($(document).scrollTop()<2200) {
      $("a[class='active']").removeClass("active").addClass("nactive");  
      $("a[href='#technika']").removeClass("nactive").addClass("active");
    } else if($(document).scrollTop()<4500) {
      $("a[class='active']").removeClass("active").addClass("nactive");  
      $("a[href='#lidi']").removeClass("nactive").addClass("active"); 
    }  else if($(document).scrollTop()<6500) {
      $("a[class='active']").removeClass("active").addClass("nactive");  
      $("a[href='#sup']").removeClass("nactive").addClass("active"); 
    } else if($(document).scrollTop()<8500) {
      $("a[class='active']").removeClass("active").addClass("nactive");  
      $("a[href='#typy']").removeClass("nactive").addClass("active"); 
    } else if($(document).scrollTop()<10500) {
      $("a[class='active']").removeClass("active").addClass("nactive");  
      $("a[href='#contact']").removeClass("nactive").addClass("active");
    } else if($(document).scrollTop()<100) {
      $("a[class='active']").removeClass("active").addClass("nactive"); 
      $("a[href='#home']").removeClass("nactive").addClass("active"); 
    }
    } 
    
    function checkPos(){
        if($(document).scrollTop()>100){
        $("menu").removeClass("mid").addClass("top");
        $("div[id='stripe']").removeClass("stripemid").addClass("stripetop");
    } else{
        $("menu").removeClass("top").addClass("mid");
        $("div[id='stripe']").removeClass("stripetop").addClass("stripemid");
    }      
    }        
    </script>             
</html>