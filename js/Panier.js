



document.addEventListener("DOMContentLoaded", abonnement());

function abonnement(){
   const items = document.querySelectorAll(".saucisse");
   console.log(items)
   for (const saucisse of items) {
    saucisse.addEventListener("click",SaucisseClick);
   
   }
   console.log("penis");
}

function AfficherCodepays(codePays){
    const headerCodePays = document.querySelector("#CodePaysHeader");
    CodePaysHeader.innerHTML = codePays
}

function AfficherProvince(provinces) {
    console.log(provinces)
}

function SaucisseClick(event) {
  
    
    const saucisse = event.currentTarget;
    const idsaucisse = saucisse.id;
    const formData = new FormData();
    
    formData.append("idsaucisse",idsaucisse)
     /* donne le ID de l'image */
    //Swal.fire(monId);
    fetch("index.php?action=obtenirSaucisse" ,{
        method:"POST",
        body:formData,
    })
    .then(reponse => {
        if(!reponse.ok){
           return[] ;
        }
        return reponse.json();
        
    })
    .then(provinces => {
        //AfficherCodepays(codePays);
       // AfficherProvince(provinces);
    });
}