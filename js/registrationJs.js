$(document).ready(function() {
    $('#button').click(function(event) {
        //controllo se tutti i campi sono riempiti
        if(!checkEmptyInput()){
            event.preventDefault();
            alert('Devi inserire i dati nei campi');
        //controllo se le due password sono uguali
        } else if(!checkPassword()){
            event.preventDefault();
            alert('I due campi delle password devono contenere la stessa password');
        //controllo che la password soddisfi i requisiti minimi
        } else if(!checkPasswordValidity()){
            event.preventDefault();
            alert('La password deve essere lunga almeno 8 caratteri');
        }
    });
});

function checkEmptyInput(){
    if($('#Username').val() == '' || $('#password').val() == '' ||
        $('#ConfermaPassword').val() == ''){
        return false;
    } else{
        return true;
    }
}

function checkPassword(){
    if($('#password').val() != $('#ConfermaPassword').val()){
        return false;
    } 
    return true;
}

function checkPasswordValidity(){
    if($('#password').length < 8){
        return false;
    }
    return true;
}