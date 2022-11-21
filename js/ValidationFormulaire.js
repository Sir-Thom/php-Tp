// Example starter JavaScript for disabling form submissions if there are invalid fields
(() => {
    "use strict";

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    const forms = document.querySelectorAll(".needs-validation");
   // $('#alert').hide();
   //$('.alert').alert('close')
    // Loop over them and prevent submission
    Array.from(forms).forEach((form) => {
        form.addEventListener(
            "submit",
            (event) => {
                if (!form.checkValidity()) {
                    event.preventDefault();
                    event.stopPropagation();
                    $('.alert').alert()
                }
               // $('.alert').alert('dispose')
                form.classList.add("was-validated");
            },
            false
        );
    });
})();
