frissites();
function frissites() {
  //lementem a formot amit elő akarok majd hívni és a "frissites" gombokat
  const frissitesForm = document.querySelector("#frissitesForm");
  const frissites = document.querySelectorAll(".frissites");

    for(let i = 0; i < frissites.length; i++){
      frissites[i].addEventListener("click", function(){
        //const azonosito = document.querySelectorAll(".azonosito");
        const id = this.previousElementSibling.value;
     
        $(document).ready(function(){
          $.post("frissites.php",
          {id: id},
          function(data){

            let adatok = [];  
            adatok = data.split(":"); 
            document.getElementById("idFrissites").value = adatok[0];
            document.getElementById("felhasznaloFrissites").value = adatok[1];
            document.getElementById("jelszoFrissites").value = adatok[2];
            document.getElementById("jogFrissites").value = adatok[3];
          });

          frissitesForm.classList.add("mutat");
        });
      });
    }
}


 
 //a href="admin.php?torles=<?php echo $elem['id']; ?>" class="torles"