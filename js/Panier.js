document.addEventListener("DOMContentLoaded", abonnement());

function abonnement (){
   const items = document.querySelectorAll(".drapeau");
   for (const drapeau of items) {
    drapeau.addEventListener("click",DrapeauClick);
   }
}

function AfficherCodepays(codePays){
    const headerCodePays = document.querySelector("#CodePaysHeader");
    CodePaysHeader.innerHTML = codePays
}

function AfficherProvince(provinces) {
    console.log(provinces)
}

function DrapeauClick(event) {
  
    
    const drapeau = event.currentTarget;
    const codePays = drapeau.id;
    const formData = new FormData();
    
    formData.append("codePays",codePays)
     /* donne le ID de l'image */
    //Swal.fire(monId);
    fetch("index.php?action=obtenirProvinces" ,{
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
        AfficherCodepays(codePays);
        AfficherProvince(provinces);
    });
}