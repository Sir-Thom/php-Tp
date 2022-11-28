



document.addEventListener("DOMContentLoaded", abonnement());
document.addEventListener("DOMContentLoaded", abonnementrm());
function abonnement(){
   const items = document.querySelectorAll(".saucisse");
   
   //console.log(items) 
   
   for (const saucisse of items) {
    saucisse.addEventListener("click",SaucisseClick);
   
   }
   
}
function abonnementrm(){
    const rmItems = document.querySelectorAll(".rmsaucisse")
    //console.log(items) 
    for (const saucisse of rmItems) {
     saucisse.addEventListener("click",RmSaucisseClick);
    
    }
    
    
 }

function AfficherPanier(saucisse) {
    //add form here
    
}
function RmSaucisseClick(event){
    const saucisse = event.currentTarget;
    const idsaucisse = saucisse.id;
    const formData = new FormData();
    formData.append("idsaucisse",idsaucisse)
    fetch("index.php?action=RemoveSaucisse" ,{
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
       AfficherPanier(idsaucisse);
    });
}
function SaucisseClick(event) {
  
    
    const saucisse = event.currentTarget;
    const idsaucisse = saucisse.id;
 //   const info = 
    console.log(saucisse)
    console.log(idsaucisse)
    const formData = new FormData();
    console.log(idsaucisse);
    formData.append("idsaucisse",idsaucisse)
     /* donne le ID de l'image */
    //Swal.fire(monId);
    fetch("index.php?action=ajoutSaucisse" ,{
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
       AfficherPanier(idsaucisse);
    });
}