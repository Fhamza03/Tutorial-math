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

var aide2 = true;
function ShowPassword2(){   
    var eye = document.getElementById('eye2');
    var input =  document.getElementById('InputPassword2');
    if(aide2){
       input.setAttribute('type','text');
       eye.src="eyeOpen.png";
       aide2 = false;
    }else{
        input.setAttribute('type','password');
        eye.src="eyeClose.png";
        aide2 = true;
    }
    // alert("HelloWorld");
}

function Affiche(){
    document.getElementById('drop').style.display = 'block';
}

function Hide(){
    document.getElementById('drop').style.display = 'none';
}