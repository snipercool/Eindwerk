   
        if (localStorage.getItem("check") === null) {
          var extrayear = "unchecked";
          document.getElementById('extrayear').style.display ='none';
          localStorage.setItem('check', "unchecked");
          
      } else{
          var extrayear = localStorage.getItem('check');
          if (extrayear == "checked") {
            document.getElementById('extrayear').style.display ='block';
          }
      }
      
    function addyear() {
      
      if (extrayear == "unchecked") {
        document.getElementById('extrayear').style.display ='block';
          extrayear = "checked";
          localStorage.setItem('check', "checked");
          
      }
      else if (extrayear == "checked") {
        document.getElementById("extrayear").style.display ='none';
          extrayear = "unchecked";
          localStorage.setItem('check', "unchecked");
      }
      
      
    }