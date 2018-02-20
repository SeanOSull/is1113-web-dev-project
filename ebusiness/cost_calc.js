/* global $ */



function calcSub(){

    

    var argSubTotal;
    
      if(document.getElementById('AmazonWebServices').checked) {

      argSubTotal = 300;

    }
     var argSubTotal;
    
      if(document.getElementById('Cloud9').checked) {

      argSubTotal = 200;

    }
     var argSubTotal;

     if(document.getElementById('Gmail').checked) {

      argSubTotal = 400;

    }
     var argSubTotal;

     if(document.getElementById('salesforce').checked) {

      argSubTotal = 100;

    }

    display(argSubTotal);

}



function display(parm1){

  

  document.getElementById("subtotal").value = parm1;

  document.getElementById("total").value = parm1;

        

  enablebtnProceed();

}





function enablebtnProceed(){

    $('#btnProceed').prop('disabled', false);

}



function disablebtnProceed() {

    $('#btnProceed').prop('disabled', true);

}