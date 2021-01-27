let accesActionClient = document.getElementsByClassName("accesActionClient");
let user = $_SESSION['qualification'];

  if (user == ("commercial" || "responsable Commerciale" || "administrateur") ){
    accesActionClient.style.display= "block";
  } else {
        for (var i = 0; i < accesActionClient.length; i ++) {
            accesActionClient[i].style.display = 'none';
        }
    }
