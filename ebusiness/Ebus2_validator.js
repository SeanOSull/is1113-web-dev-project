/* global $ */

function validateDetails(){

     var pin, NAME, EMAIL, pass;

 pin = document.getElementById("user_pin").value;
 EMAIL = document.getElementById("EMAIL").value;
 NAME = document.getElementById("NAME").value;
 pass = document.getElementById("pass").value; pass=0
 
 
   
    
    if (String(pin).length<4){
        alert("Please make sure your PIN is accurate");
        }
        else pass=+1
   
    if (NAME==""){
                 alert("Please enter your name.")
             }
             else pass=+1
 
          
    if (EMAIL==""){
                 alert("Please enter your Email.")
             }  
             else pass=+1
  
  if ((pass==3)){ 
 
                   enablebtnPurchase();
              }
          
            
  
           

function enablebtnPurchase(){
    $('#btnPurchase').prop('disabled',false);

}

function disablebtnPurchase() {
    $('#btnPurchase').prop('disabled',true)
}
}