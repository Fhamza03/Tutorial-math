

function Affiche(){
    document.getElementById('drop').style.display = 'block';
}

function Hide(){
    document.getElementById('drop').style.display = 'none';
}

function ShowAlg(event){
    event.preventDefault();
    var Analyse = document.getElementById('anl');
    Analyse.style.display = 'none';
    var Algebre = document.getElementById('alg');
    Algebre.style.display = 'block';
}

function ShowAnl(event){
    event.preventDefault();
    var Algebre = document.getElementById('alg');
    Algebre.style.display = 'none';
    var Analyse = document.getElementById('anl');
    Analyse.style.display = 'block';
} 


function search(event) {
    event.preventDefault();
    const searchValue = document.getElementById('search-input').value.toLowerCase();

    const titles = document.querySelectorAll('.title');

    
    for (let i = 0; i < titles.length; i++) {
      const title = titles[i];

      if (title.innerText.toLowerCase().includes(searchValue)) {
        title.style.display = 'block';
        document.getElementById('bgg').style.backgroundImage= "url('')";
      } else {
        title.style.display = 'none';
      }
    }
  }