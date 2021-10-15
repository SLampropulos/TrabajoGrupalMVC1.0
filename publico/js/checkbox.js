var boton = document.getElementById("boton");
var check =document.querySelectorAll(".valores");

boton.addEventListener("click",function(){
    console.log("conocimientos:");
    check.forEach((e)=>{
        if(e.checked==true){
            console.log(e.value);
        }
    })
})