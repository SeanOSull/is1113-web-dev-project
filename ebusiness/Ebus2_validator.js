/* global $ */

function validateDetails(){

     var pin, NAME, EMAIL;

 pin = document.getElementById("user_pin").value;
 EMAIL = document.getElementById("EMAIL").value;
 NAME = document.getElementById("NAME").value;
 
   
    
    if (String(pin).length<4){
        alert("Please make sure your PIN is accurate");
        }
   
    if (NAME==""){
                 alert("Please enter your name.")
             }
 
          
    if (EMAIL==""){
                 alert("Please enter your Email.")
             }  
  else
   {
                   enablebtnPurchase();
              }
          
            
  
           

function enablebtnPurchase(){
    $('#btnPurchase').prop('disabled',false);

}

function disablebtnPurchase() {
    $('#btnPurchase').prop('disabled',true)
}
}