Swal.fire({
    title: 'Attention!!! veuillez vous connectez ou vous inscription',
    showDenyButton: true,
    confirmButtonText: 'Connexion',
    denyButtonText: `retourner à l'acceuil`,
  }).then((result) => {
    /* Read more about isConfirmed, isDenied below */
    if (result.isConfirmed) {
        window.location.href="index.php?action=connexion";
      //Swal.fire('Saved!', '', 'success')
    } else if (result.isDenied) {
        window.location.href="index.php?action=accueil"
      //Swal.fire('Changes are not saved', '', 'info')
    }
  })