// fonction pour enregistrer le titre dans le localStorage
/*function Save(title) {
    var titles = JSON.parse(localStorage.getItem("titles")) || [];
    titles.push(title);
    if (titles.length > 5) {
      titles.shift();
    }
    localStorage.setItem("titles", JSON.stringify(titles));
  }
  
  // fonction pour afficher les titres dans la page de destination
  function DisplayTitles() {
    var titles = JSON.parse(localStorage.getItem("titles")) || [];
    var titleList = document.getElementById("title-list");
    for (var i = 0; i < titles.length; i++) {
      var li = document.createElement("li");
      /*li.textContent = titles[i];
      titleList.appendChild(li);


    }
  }
  
  // appel de la fonction DisplayTitles pour afficher les titres au chargement de la page
  window.onload = function() {
    DisplayTitles();
  }*/
  //GFFGFGGF*/
  function Save(title, link) {
    var titles = JSON.parse(localStorage.getItem("titles")) || [];
    titles.push({title: title, link: link});
    if (titles.length > 5) {
      titles.shift();
    }
    localStorage.setItem("titles", JSON.stringify(titles));
  }
  
  function DisplayTitles() {
    var titles = JSON.parse(localStorage.getItem("titles")) || [];
    var titleList = document.getElementById("title-list");
    for (var i = 0; i < titles.length; i++) {
      var li = document.createElement("li");
      li.innerHTML = "<a href='" + titles[i].link + "'>" + titles[i].title + "</a>";
      titleList.appendChild(li);
    }
  }
  
  window.onload = function() {
    DisplayTitles();
  }
  