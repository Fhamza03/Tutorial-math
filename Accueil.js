





function Affiche(){
    document.getElementById('drop').style.display = 'block';
}

function Hide(){
    document.getElementById('drop').style.display = 'none';
}


function ShowAlg(event){
    event.preventDefault();
    window.location.href = "Tuto.html";
    
    var Analyse = document.getElementById('anl');
    Analyse.style.display = 'none';
    var Algebre = document.getElementById('alg');
    Algebre.style.display = 'block';
}

function ShowAnl(event){
    window.location.href = "Tuto.html";
    event.preventDefault();
    var Algebre = document.getElementById('alg');
    Algebre.style.display = 'none';
    var Analyse = document.getElementById('anl');
    Analyse.style.display = 'block';
} 


  