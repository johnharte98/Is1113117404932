/* global $ */

function calcSub(){
    
    var argSubTotal;
    
    if(document.getElementById('salesforce').checked) {
    argSubTotal= 100;
}
else {
    argSubTotal= 300;
}

display(argSubTotal);
}

function display(parm1){
    
    document.getelementbyId("subtotal").value= parm1;
    document.getelementbyId("total").value= parm1;
    
    enablebtnProceed();
}


function enablebtnproceed(){
    $('#btnProceed').prop('disabled',false);
}

function disablebtnProceed() {
    $('#btnProceed').prop('disabled', true);
}