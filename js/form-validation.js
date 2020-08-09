// Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
  'use strict'

  window.addEventListener('load', function () {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation')

    // Loop over them and prevent submission
    Array.prototype.filter.call(forms, function (form) {
      form.addEventListener('submit', function (event) {
        if (form.checkValidity() === false) {
          event.preventDefault()
          event.stopPropagation()
        }
        form.classList.add('was-validated')
      }, false)
    })
  }, false)
}())



     function validate() {

           var firstName = document.myForm.firstName.value;
           var lastName = document.myForm.lastName.value;
           var checkName = /^[A-Za-z]+$/;

           var emailID = document.myForm.email.value;
           atpos = emailID.indexOf("@");
           dotpos = emailID.lastIndexOf(".");

           var cardnumber = document.myForm.ccnumber.value;
           var cardexpiry = document.myForm.ccexpiration.value;
           var cvv = document.myForm.cccvv.value;
           var numbers = /^[0-9]+$/;

         if( document.myForm.firstName.value == "" || checkName.test(firstName)===false) {
            alert( "Please provide your first name! in the format abcxyz (no special characters or digits)" );
            document.myForm.firstName.focus() ;
            return false;
         }
            if( document.myForm.lastName.value == "" || checkName.test(lastName)===false) {
            alert( "Please provide your last name! in the format abcxyz(no special characters or digits)" );
            document.myForm.lastName.focus() ;
            return false;
         }

         if( document.myForm.email.value == "" || atpos < 1 || ( dotpos - atpos < 2 ) ) {
            alert( "Please provide your Email address in the format abcd@xyz.com!" );
            document.myForm.email.focus() ;
            return false;
         }
          if( document.myForm.address.value == "" ) {
            alert( "Please provide your address!" );
            document.myForm.address.focus() ;
            return false;
         }
          if( document.myForm.state.value == "-1" ) {
            alert( "Please choose your state!" );
            return false;
         }
             if( document.myForm.city.value == "-1" ) {
            alert( "Please provide your country!" );
            return false;
         }
         if( document.myForm.zip.value == "" || isNaN( document.myForm.zip.value ) ||
            document.myForm.zip.value.length != 5 ) {

            alert( "Please provide a zip in the format #####." );
            document.myForm.zip.focus() ;
            return false;
         }
          if( document.myForm.ccnumber.value == "" || isNaN( document.myForm.ccnumber.value ) ||
            document.myForm.ccnumber.value.length != 16 || numbers.test(cardnumber)===false) {

            alert( "Please provide a 16 digit credit cart number in the format ################." );
            document.myForm.ccnumber.focus() ;
            return false;
         }
         if( document.myForm.ccexpiration.value == "" || isNaN( document.myForm.ccexpiration.value ) ||
            document.myForm.ccexpiration.value.length != 6 || numbers.test(cardexpiry)===false) {

            alert( "Please provide the expiry date of credit cart in the format MMYYYY(only Numeric values)." );
            document.myForm.ccexpiration.focus() ;
            return false;
         }
         if( document.myForm.cccvv.value == "" || isNaN( document.myForm.cccvv.value ) ||
            document.myForm.cccvv.value.length != 3 || numbers.test(cvv)===false) {

            alert( "Please provide the cvv of credit cart in the format ###(only Numeric Values)." );
            document.myForm.cccvv.focus() ;
            return false;
         }

        alert("form has been submitted successfully")
         return( true );
      }
   //-->
