var pass1 = document.getElementById("form3Example4cg");
var pass2 = document.getElementById("form3Example4cdg");
var mError = document.getElementById("mError");

pass2.addEventListener("mouseout",function(){
    console.log(pass1.value);
    console.log(pass2.value);
    if(pass1!=pass2){
        mError.innerText="No concide la cotraseña"
    }
})