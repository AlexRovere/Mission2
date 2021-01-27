let accesActionClient = document.getElementsByClassName("accesActionClient");
let user = "commercial";

  if (user == ("commercial" || "responsable Commerciale" || "administrateur") ){
    accesActionClient[0].style.display= "block";
  } else {
    accesActionClient[0].style.display = 'none';
      
    }
