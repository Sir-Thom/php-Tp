



document.addEventListener("DOMContentLoaded", abonnement());

function abonnement(){
   const items = document.querySelectorAll(".saucisse");
   console.log(items) 
   for (const saucisse of items) {
    saucisse.addEventListener("click",SaucisseClick);
   
   }
   
}

function AfficherPanier(saucisse) {
    console.log(saucisse)
}
function SaucisseClick(event) {
  
    
    const saucisse = event.currentTarget;
    const idsaucisse = saucisse.id;
    const formData = new FormData();
    console.log(idsaucisse);
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
    
    .then(saucisse => {
        console.log("teste");
        //AfficherCodepays(codePays);
       AfficherPanier(saucisse);
    });
}