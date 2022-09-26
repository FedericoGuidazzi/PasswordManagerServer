$(document).ready(function() {
    console.log('ss');
    $('#button').click(function(event) {
        //controllo se tutti i campi sono riempiti
        if(!checkEmptyInput()){
            event.preventDefault();
            alert('Devi inserire i dati nei campi');
        }
    });
});

function checkEmptyInput(){
    if($('#Username').val() == '' || $('#password').val() == ''){
        return false;
    } else{
        return true;
    }
}