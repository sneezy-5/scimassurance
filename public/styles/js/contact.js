
/***FORMULAIRE CONTACTS */

var formcontact= document.querySelector('.formcontact')
var alerteform=document.querySelector('.alerteform')

formcontact.addEventListener('submit',function(e){

    var caseform=document.querySelectorAll('.caseform')
    caseform.forEach((cases)=>{
      if(cases.value===""){
        e.preventDefault()
        cases.style.border="1px solid red"
        alerteform.style.display="flex"
      }else{
        cases.style.border="1px solid #ced4da"
        alerteform.style.display="none"
      }
    })

})