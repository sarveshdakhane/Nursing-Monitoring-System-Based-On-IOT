



    function room_info(cln,avl,rid)
    {
      var green= "#01FD01";
      var red  = "#F40101";
      
    
    
      switch(true)
      {
      case rid==1:
        if(cln=="true" && avl=="true")
      { 
       
        document.getElementById("avalibilty1").style.backgroundColor = green;
        document.getElementById("clean1").style.backgroundColor = green;
        
      }
      else if (cln=="false" && avl=="true")
      {
        document.getElementById("avalibilty1").style.backgroundColor = green;
        document.getElementById("clean1").style.backgroundColor = red;
      }
      else if(cln=="true" && avl=="false")
      {
        document.getElementById("avalibilty1").style.backgroundColor = red;
        document.getElementById("clean1").style.backgroundColor = green;
      }
      else
      {
        document.getElementById("avalibilty1").style.backgroundColor = red;
        document.getElementById("clean1").style.backgroundColor = red;
      }
    
        
        break;
    
        case rid==2:
        if(cln=="true" && avl=="true")
      { 
        
        document.getElementById("avalibilty2").style.backgroundColor = green;
        document.getElementById("clean2").style.backgroundColor = green;
        
      }
      else if (cln=="false" && avl=="true")
      {
        document.getElementById("avalibilty2").style.backgroundColor = green;
        document.getElementById("clean2").style.backgroundColor = red;
      }
      else if(cln=="true" && avl=="false")
      {
        document.getElementById("avalibilty2").style.backgroundColor = red;
        document.getElementById("clean2").style.backgroundColor = green;
      }
      else
      {
        document.getElementById("avalibilty2").style.backgroundColor = red;
        document.getElementById("clean2").style.backgroundColor = red;
      }
    
        break;
        case rid==3:
        if(cln=="true" && avl=="true")
      { 
        
        document.getElementById("avalibilty3").style.backgroundColor = green;
        document.getElementById("clean3").style.backgroundColor = green;
        
      }
      else if (cln=="false" && avl=="true")
      {
        document.getElementById("avalibilty3").style.backgroundColor = green;
        document.getElementById("clean3").style.backgroundColor = red;
      }
      else if(cln=="true" && avl=="false")
      {
        document.getElementById("avalibilty3").style.backgroundColor = red;
        document.getElementById("clean3").style.backgroundColor = green;
      }
      else
      {
        document.getElementById("avalibilty3").style.backgroundColor = red;
        document.getElementById("clean3").style.backgroundColor = red;
      }
    
        break;
        case rid==4:
        if(cln=="true" && avl=="true")
      { 
        
        document.getElementById("avalibilty4").style.backgroundColor = green;
        document.getElementById("clean4").style.backgroundColor = green;
        
      }
      else if (cln=="false" && avl=="true")
      {
        document.getElementById("avalibilty4").style.backgroundColor = green;
        document.getElementById("clean4").style.backgroundColor = red;
      }
      else if(cln=="true" && avl=="false")
      {
        document.getElementById("avalibilty4").style.backgroundColor = red;
        document.getElementById("clean4").style.backgroundColor = green;
      }
      else
      {
        document.getElementById("avalibilty4").style.backgroundColor = red;
        document.getElementById("clean4").style.backgroundColor = red;
      }
    
        break;
        case rid==5:
        if(cln=="true" && avl=="true")
      { 
        
        document.getElementById("avalibilty5").style.backgroundColor = green;
        document.getElementById("clean5").style.backgroundColor = green;
        
      }
      else if (cln=="false" && avl=="true")
      {
        document.getElementById("avalibilty5").style.backgroundColor = green;
        document.getElementById("clean5").style.backgroundColor = red;
      }
      else if(cln=="true" && avl=="false")
      {
        document.getElementById("avalibilty5").style.backgroundColor = red;
        document.getElementById("clean5").style.backgroundColor = green;
      }
      else
      {
        document.getElementById("avalibilty5").style.backgroundColor = red;
        document.getElementById("clean5").style.backgroundColor = red;
      }
    
        break;
        case rid==6:
        if(cln=="true" && avl=="true")
      { 
        
        document.getElementById("avalibilty6").style.backgroundColor = green;
        document.getElementById("clean6").style.backgroundColor = green;
        
      }
      else if (cln=="false" && avl=="true")
      {
        document.getElementById("avalibilty6").style.backgroundColor = green;
        document.getElementById("clean6").style.backgroundColor = red;
      }
      else if(cln=="true" && avl=="false")
      {
        document.getElementById("avalibilty6").style.backgroundColor = red;
        document.getElementById("clean6").style.backgroundColor = green;
      }
      else
      {
        document.getElementById("avalibilty6").style.backgroundColor = red;
        document.getElementById("clean6").style.backgroundColor = red;
      }
    
        break;
        case rid==7:
        if(cln=="true" && avl=="true")
      { 
        
        document.getElementById("avalibilty7").style.backgroundColor = green;
        document.getElementById("clean7").style.backgroundColor = green;
        
      }
      else if (cln=="false" && avl=="true")
      {
        document.getElementById("avalibilty7").style.backgroundColor = green;
        document.getElementById("clean7").style.backgroundColor = red;
      }
      else if(cln=="true" && avl=="false")
      {
        document.getElementById("avalibilty7").style.backgroundColor = red;
        document.getElementById("clean7").style.backgroundColor = green;
      }
      else
      {
        document.getElementById("avalibilty7").style.backgroundColor = red;
        document.getElementById("clean7").style.backgroundColor = red;
      }
    
        break;
        case rid==8:
        if(cln=="true" && avl=="true")
      { 
        
        document.getElementById("avalibilty8").style.backgroundColor = green;
        document.getElementById("clean8").style.backgroundColor = green;
        
      }
      else if (cln=="false" && avl=="true")
      {
        document.getElementById("avalibilty8").style.backgroundColor = green;
        document.getElementById("clean8").style.backgroundColor = red;
      }
      else if(cln=="true" && avl=="false")
      {
        document.getElementById("avalibilty8").style.backgroundColor = red;
        document.getElementById("clean8").style.backgroundColor = green;
      }
      else
      {
        document.getElementById("avalibilty8").style.backgroundColor = red;
        document.getElementById("clean8").style.backgroundColor = red;
      }
    
        break;
        case rid==9:
        if(cln=="true" && avl=="true")
      { 
        
        document.getElementById("avalibilty9").style.backgroundColor = green;
        document.getElementById("clean9").style.backgroundColor = green;
        
      }
      else if (cln=="false" && avl=="true")
      {
        document.getElementById("avalibilty9").style.backgroundColor = green;
        document.getElementById("clean9").style.backgroundColor = red;
      }
      else if(cln=="true" && avl=="false")
      {
        document.getElementById("avalibilty9").style.backgroundColor = red;
        document.getElementById("clean9").style.backgroundColor = green;
      }
      else
      {
        document.getElementById("avalibilty9").style.backgroundColor = red;
        document.getElementById("clean9").style.backgroundColor = red;
      }
    
        break;
        default:
        alert("def");
    
    
      }
    
      
    }
    


            function w3_open() 
            {
              document.getElementById("mySidebar").style.display = "block";
              document.getElementById("myOverlay").style.display = "block";
            }
             
            function w3_close() 
            {
              document.getElementById("mySidebar").style.display = "none";
              document.getElementById("myOverlay").style.display = "none";
            }
            
            
            function onClick(element) 
            {
              document.getElementById("img01").src = element.src;
              document.getElementById("modal01").style.display = "block";
              var captionText = document.getElementById("caption");
              captionText.innerHTML = element.alt;
            }