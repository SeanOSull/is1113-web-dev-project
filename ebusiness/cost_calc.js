/* global $ */

function calcSub(){
    var argSubTotal;
    
    
    if (document.getElementById('Cloud9').checked){
        argSubTotal =200;
    }
    
   else  if (document.getElementById('Gmail').checked){
        argSubTotal=400;
    }
    
   else if (document.getElementById('salesforce').checked){
        argSubTotal =100;
    }
   else if (document.getElementById('AWS').checked){
        argSubTotal =300;
    }
    
    calcDisVatTotal(argSubTotal);
}

function calcDisVatTotal(parmSubTotal){
    var Discount, Vat, total;
    
    Discount = parmSubTotal * 0.05
    Vat = (parmSubTotal -Discount)*0.10
    
    total = parmSubTotal - Discount + Vat
    
    display(parmSubTotal, Discount, Vat, total)
}

function display(parm1, parm2, parm3, parm4){
    
    document.getElementById("subtotal").value = parm1;
    document.getElementById("Discount @ 5%").value = parm2;
    document.getElementById("Vat @ 10%").value = parm3;
    document.getElementById("total").value = parm4;
    
    enablebtnProceed();
}

function enablebtnProceed(){
    $('#btnProceed').prop('disabled',false);
}

function disablebtnProceed(){
    $('#btnProceed').prop('disabled',true);
}