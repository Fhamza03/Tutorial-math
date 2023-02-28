var aide = true;
function ShowPassword1(){   
    var eye = document.getElementById('eye');
    var input =  document.getElementById('InputPassword');
    if(aide){
       input.setAttribute('type','text');
       eye.src="eyeOpen.png";
       aide = false;
    }else{
        input.setAttribute('type','password');
        eye.src="eyeClose.png";
        aide = true;
    }
    // alert("HelloWorld");
}

function Affiche(){
    document.getElementById('drop').style.display = 'block';
}

function Hide(){
    document.getElementById('drop').style.display = 'none';
}