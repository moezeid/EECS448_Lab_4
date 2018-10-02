
let invalidForm=true;

let errorMsg= "Some errors occured: "
function validation(){
  alert("hey!");
  let errorCount=0;

  let second = document.getElementById("userpass").value;
  let third = document.getElementById("item1").value;
  let fourth = document.getElementById("item2").value;
  let fifth = document.getElementById("item3").value;
   if(second== ""){
     errorCount++;
     errorMsg= errorMsg + "cannot leave password field blank";

   }
   if( third == "" || third < 0 || isNaN(third) )
   {
     errorCount++;
     errorMsg= errorMsg + ", enter a valid amount of Used Napkins please ";
   }

   if( fourth == "" || fourth < 0 || isNaN(fourth) )
   {
     errorCount++;
     errorMsg= errorMsg + ", enter a valid amount of Chips please";
   }

   if( fifth == "" || fifth < 0 || isNaN(fifth) )
   {
     errorCount++;
     errorMsg= errorMsg + ", enter a valid amount of Pennies please";
   }

   if(errorCount != 0){

     alert(errorMsg);
     return(!invalidForm)
   }
















}
