let previousButton = $('#previous');
let nextButton = $('#next'); 
let email = $('#registration_form_email');
let password = $('#registration_form_plainPassword');
let age = $('#registration_form_age');
let sex = $('#registration_form_sex');
let message=$('#message');
let emailPassword =  $('#emailPassword');
let ID = $('#ID');
var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;

const isValidEmail = (email) => {
    return emailPattern.test(email);
}


step = 0;

$(document).ready(function() {
    nextButton.click(function() {
        //check if form is filled 
        if(isValidEmail(email.val()) && password.val()){
            step = 1
        }
        else{
            message.append('Remplissez tous les champs');
        }
        if(step == 1){
            emailPassword.css('display', 'none');
            ID.removeAttr("style");
            previousButton.removeAttr("style");
            nextButton.empty();
            nextButton.append("Créer un compte");
            nextButton.addAttr("type", "submit");
        }
    });
    previousButton.click(function() {
        if(step == 1){
            emailPassword.removeAttr("style");
            ID.css('display', 'none');
            previousButton.css('visibility', 'hidden');
            nextButton.empty();
            nextButton.append("Suivant");
            nextButton.removeAttr("type");
        }
    });
});